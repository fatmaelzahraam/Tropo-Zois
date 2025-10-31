<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tropo Zois | Log in</title>

    <link rel="shortcut icon" href="{{ asset('lowizp.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/login.css', 'resources/js/app.js', 'resources/js/login.js'])
</head>

<body>

    {{-- If the user is already logged in --}}
    @auth
        <p>User is logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @endauth

    {{-- Left logo section --}}
    <div class="left-logo">
        <img class="lft-lo" src="{{ asset('greenlogo.png') }}" alt="logo">
    </div>

    <div class="wrapper">
        <form class="login" action="login" method="POST">
            @csrf

            {{-- Top header logo --}}
            <div class="head">
                <img class="image" src="{{ asset('brlogo.png') }}" alt="logo">
                <h4>Login</h4>
            </div>

            {{-- Email input field --}}
            <div class="input-box">
                <label for="Email">Email</label>
                <input id="Email" type="text" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password input field --}}
            <div class="input-box">
                <label for="pass">Password</label>
                <input id="pass" type="password" name="password" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            {{-- Forget password link --}}
            <div class="remember-forget">
                <a href="#">Forget password?</a>
            </div>

            {{-- General error message --}}
            @error('error')
                <p class="error">{{ $message }}</p>
            @enderror

            {{-- Submit button --}}
            <div class="submit">
                <button type="submit" class="btn">Login</button>
            </div>

            {{-- Divider line --}}
            <div class="line">
                <div class="line1"></div>
                <p>OR</p>
                <div class="line1"></div>
            </div>

            {{-- Social login icons --}}
            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
            </div>

            {{-- Register link --}}
            <div class="register-link">
                <p>Don't have an account?
                    <a href="#">Sign Up</a>
                </p>
            </div>
        </form>
    </div>

</body>
</html>
