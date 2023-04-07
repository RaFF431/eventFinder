<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('style/homestyle.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div id="container">
        <div id="top-wallpaper">
            <div id="top-content">
                <img src="assets/My Events.png" alt="myevents">
                <a href="login.html" id="login"><b>Login</b></a>
            </div>
            <div id="bottom-content">
                <h3>Take your pick</h3>
                <p>from the hottest events in town<br>and book your tickets today!</p>
            </div>
        </div>

       <div id="search-panel">
            <form action="">
                <div class="form-content">
                    <label for="looking">Looking for</label>
                    <select name="looking" id="looking" type="text">
                        <option value=""></option>
                        <option value="Concert">Concert</option>
                        <option value="Talkshow">Talkshow</option>
                        <option value="Webinar">Webinar</option>
                    </select>
                </div>
                <div class="form-content">
                    <label for="in">In</label>
                    <select name="in" id="in" type="text">
                        <option value=""></option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Palembang">Palembang</option>
                    </select>
                </div>
                <div class="form-content">
                    <label for="when">When</label>
                    <select name="when" id="when" type="text">
                        <option value=""></option>
                        <option value="Mar 30, '23">Mar 30, '23</option>
                    </select>
                </div>
                
                <button type="submit">
                    <img src="assets/Search.png" alt="" width="50" height="50">
                </button>

            </form>
       </div>

    </div>
</body>
</html>