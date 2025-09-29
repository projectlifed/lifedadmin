<?php

namespace App\Http\Controllers;

use App\Models\Healthmate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HealthmateController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'centre_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:healthmates,email',
            'address' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'password' => 'required|min:6|confirmed',
        ]);

        DB::beginTransaction();

        try {

            $healthmate = Healthmate::create([
                'centre_name' => $request->centre_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
            ]);

            $healthmate->users()->create([
                'name' => $request->centre_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

}
