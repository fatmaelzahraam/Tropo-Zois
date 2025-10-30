<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
            <div class="line">
                <div class="line1"></div>
                <p>OR</p>
                <div class="line1"></div>
            </div>
            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
            </div>
            <div class="register-link">
                <p>Don't have an account? <a href="signup.html"> Sign Up</a></p>
            </div>
        </form>
    </div>
</body>

</html>