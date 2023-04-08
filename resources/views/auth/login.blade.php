<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('style/loginstyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div id="container">
                <div id="top-wallpaper">
                    <div id="top-content">
                        <img src="assets/My Events.png" alt="myevents">
                        <a href="home.html" id="home"><b>Home</b></a>
                    </div>
                    <div id="bottom-content">
                        <h3>Take your pick</h3>
                        <p>from the hottest events in town<br>and book your tickets today!</p>
                    </div>
                </div>

                <div id="login-page">
                    <div id="top">
                        <img src="assets/My Events.png" alt="">
                        <h2>Login</h2>
                        <p>Not a member yet? <a href="/register" id="register-link">Register</a></p>
                    </div>
            <!-- Email Address -->
            <div class="form-content">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="form-content">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Remember Me -->
            <div  id="checkbox">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <button type="submit" id="login">{{ __('Log in') }}</button>
            
            <div class="form-content">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
    
                    <div id="line">
                        <p><span>or</span></p>
                    </div>
    
                    <div class="login-media">
                        <img src="assets/Facebook.png" alt="">
                        <a href="">Login with Facebook</a>
                    </div>
    
                    <div class="login-media">
                        <img src="assets/Apple.png" alt="">
                        <a href="">Login with Apple</a>
                    </div>
    
                    <div class="login-media">
                        <img src="assets/Google.png" alt="">
                        <a href="">Login with Google</a>
                    </div>
    
            
        </form>
    <script src="script/script.js"></script>
</body>
</html>