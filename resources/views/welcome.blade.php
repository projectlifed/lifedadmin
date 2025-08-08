<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body {
            background: #fdfdfc;
            color: #1b1b18;
            font-family: 'Instrument Sans', Arial, sans-serif;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        header {
            max-width: 400px;
            width: 100%;
            margin: 40px auto 0 auto;
            text-align: right;
        }
        nav a {
            display: inline-block;
            padding: 8px 20px;
            margin-left: 8px;
            border-radius: 4px;
            border: 1px solid #e3e3e0;
            color: #1b1b18;
            text-decoration: none;
            font-size: 14px;
            background: #fff;
            transition: border 0.2s;
        }
        nav a:hover {
            border-color: #19140035;
        }
        main {
            max-width: 400px;
            width: 100%;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0001;
            padding: 32px 24px;
        }
        h1 {
            margin-bottom: 24px;
            font-size: 22px;
            font-weight: 500;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        label {
            font-size: 14px;
            margin-bottom: 4px;
            display: block;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background: #fff;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-right: 6px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px 0;
            background: #2563eb;
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button[type="submit"]:hover {
            background: #1d4ed8;
        }
        .text-red-600 {
            color: #dc2626;
            font-size: 12px;
        }
        .text-green-600 {
            color: #16a34a;
            font-size: 13px;
        }
        .flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        a.text-blue-600 {
            color: #2563eb;
            text-decoration: underline;
            font-size: 13px;
        }
        a.text-blue-600:hover {
            color: #1d4ed8;
        }
        .welcome-image {
            width: 100%;
            max-width: 400px;
            margin: 0 auto 24px auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0001;
            display: block;
        }
        .main-flex {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 32px;
            max-width: 900px;
            margin: 40px auto;
            background: none;
            box-shadow: none;
            padding: 0;
        }
        .login-box {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0001;
            padding: 32px 24px;
            max-width: 400px;
            width: 100%;
        }
        .image-box {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .welcome-image {
            width: 350px;
            max-width: 100%;
            margin: 0;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0001;
            display: block;
        }
        @media (max-width: 800px) {
            .main-flex {
                flex-direction: column;
                gap: 16px;
            }
            .welcome-image {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <main class="main-flex">
        <div class="login-box">
            <h1>Your wellness, one step away</h1>
            @if (session('status'))
                <div class="text-green-600" style="margin-bottom: 16px;">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>
                    @error('password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-blue-600" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="image-box">
            <img src="{{ asset('images/welcome-image.png') }}" alt="Welcome" class="welcome-image">
        </div>
    </main>
</body>
</html>
