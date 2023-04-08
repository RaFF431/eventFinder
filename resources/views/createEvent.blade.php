<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('style/addnewevent-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/344429efc8.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/344429efc8.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="container">
           <div class="main-navbar">
                <img src="assets/My Events.png" alt="">
           </div>
           <div class="nav-tab">
                <button>Add New Event</button>
           </div>
        </div>
    </nav>

    <form action="/store-event" method="POST" enctype="multipart/form-data">
        <div class="add-poster">
            <input type="file" accept="image/*">
            <img src="assets/Group 26.png" alt="">
            <p>Unggah poster gambar/poster/banner</p>
        </div>
        <div class="add-event">
            <input type="text" placeholder="Nama event*">
        </div>
        <div class="category-event">
            <select name="category" id="category" type="text">
                <option value="">Pilih Kategori</option>
                <option value="Concert">Concert</option>
                <option value="Talkshow">Talkshow</option>
                <option value="Webinar">Webinar</option>
            </select>
        </div>
        <div class="description-event">
            <label for="description">Deskripsi*</label>
            <textarea name="" id="" cols="10" rows="10"></textarea>
        </div>
        <div class="harga-event">
            <input type="text" placeholder="Harga*">
        </div>
        <div class="tanggal-event">
            <input type="date">
        </div>
        <div class="lokasi-event">
            <input type="text" placeholder="Lokasi Event*">
        </div>
        <button>Submit</button>
    </form>
    
</body>
</html>