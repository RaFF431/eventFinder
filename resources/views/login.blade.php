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
                <p>Not a member yet? <a href="register.html" id="register-link">Register</a></p>
            </div>
            <form action="">
                <div class="form-content">
                    <label for="email">Email</label>
                    <input type="text">
                </div>
                <div class="form-content">
                    <div id="password">
                        <label for="password">Password</label>
                        <a href="">Forgot password</a>
                    </div>
                    <div id="input-box">
                        <input type="password" id="input-password">
                        <i id="button-visible"><img src="assets/Unhidden.png" alt="eye" id="eye" width="41" height="30"></i>
                    </div>
                </div>
        
                <div id="checkbox">
                    <input type="checkbox">
                    <p>Remember me</p>
                </div>

                <button type="submit" id="login">Login</button>

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
       </div>
    </div>
    <script src="script/script.js"></script>
</body>
</html>