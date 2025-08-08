<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    $remember = $request->has('remember');

    // Fetch user from database (PostgreSQL)
    $user = \DB::table('users')->where('email', $request->email)->first();

    if ($user && \Hash::check($request->password, $user->password)) {
        Auth::loginUsingId($user->id, $remember);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}
}
