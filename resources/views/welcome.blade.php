<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="lowizp.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="">
    <title>Tropo Zois | Log in</title>

    @vite(['resources/css/login.css', 'resources/js/app.js'])

</head>

<body>
    @auth
        <p>User is logged in</p>
        <form actions="/logout">
            <button>Logout</button>
        </form>
    @endauth
    <div class="left-logo">
        <img class="lft-lo" src="lowizp.png" alt="logo">
    </div>
    <div class="wrapper">
        <form class="login" action="/login" method="post">
            @csrf
            <div class="head">
                <img class="image" src="brlogo.png" alt="logo">
                <h4>Login</h4>
            </div>
            <div class="input-box">
                <label class="label" for="Email">Email</label>
                <input id="Email" type="text" name="email" placeholder="Enter Your Email" required
                    value="{{ old('email') }}">
                @error("email")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="input-box">
                <label class="label" for="pass">Password</label>
                <input id="pass" type="password" name="password" placeholder="Enter Your password" required
                    value="{{ old('pass') }}">
                @error("password")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="remember-forget">
                <a href="forget password?">Forget password?</a>
            </div>
            @error("error")
                <p>{{ $message }}</p>
            @enderror
            <div class="submit">
                <button type="submit" class="btn">Login</button>
            </div>
=======
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tropo Zois | Log in</title>

    <link rel="shortcut icon" href="{{ asset('images/lowizp.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/login.css', 'resources/js/app.js'])
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
        <img class="lft-lo" src="{{ asset('images/green logo.png') }}" alt="logo">
    </div>

    <div class="wrapper">
        <form class="login" action="{{ route('login') }}" method="POST">
            @csrf

            {{-- Top header logo --}}
            <div class="head">
                <img class="image" src="{{ asset('images/brlogo.png') }}" alt="logo">
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
                <a href="{{ route('password.request') }}">Forget password?</a>
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
>>>>>>> a064372 (test if changes in front work good)
            <div class="line">
                <div class="line1"></div>
                <p>OR</p>
                <div class="line1"></div>
            </div>
<<<<<<< HEAD
=======

            {{-- Social login icons --}}
>>>>>>> a064372 (test if changes in front work good)
            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
            </div>
<<<<<<< HEAD
            <div class="register-link">
                <p>Don't have an account? <a href="signup.html"> Sign Up</a></p>
            </div>
        </form>
    </div>
</body>

</html>
=======

            {{-- Register link --}}
            <div class="register-link">
                <p>Don't have an account?
                    <a href="{{ route('register') }}">Sign Up</a>
                </p>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
>>>>>>> a064372 (test if changes in front work good)
