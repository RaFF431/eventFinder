<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('style/registerstyle.css')}}">
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

       <div id="register-page">
            <div id="top">
                <img src="assets/My Events.png" alt="">
                <h2>Register</h2>
                <p>Already have an account? <a href="login.html" id="login-link">Login</a></p>
            </div>
            <form action="">
                <div class="form-content">
                    <label for="username">Username</label>
                    <input type="text">
                </div>
                <div class="form-content">
                    <label for="email">Email Address</label>
                    <input type="text">
                </div>
                <div class="form-content">
                    <div id="password-box">
                        <div class="password">
                            <label for="password">Password</label>
                            <div id="password-field">
                                <input type="password" id="input-password">
                                <i id="button-visible"><img src="assets/Unhidden.png" alt="eye" id="eye" width="35" height="30"></i>
                            </div>
                        </div>
                        <div class="password">
                            <label for="confirmpassword">Confirm Password</label>
                            <div id="password-field">
                                <input type="password" id="input-confirmpassword">
                                <i id="button-visible2"><img src="assets/Unhidden.png" alt="eye" id="eye2" width="35" height="30"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-content">
                    <label for="phonenumber">Phone Number</label>
                    <input type="text">
                </div>

                <div id="checkbox">
                    <input type="checkbox">
                    <p>I have read and agree to the <a href="">Terms and Agreement</a></p>
                </div>

                <button type="submit" id="register">Register</button>
                
            </form>
       </div>
    </div>
    <script src="script/script.js"></script>
</body>
</html>