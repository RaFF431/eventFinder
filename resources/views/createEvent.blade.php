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

    <form onsubmit="return validation()" action="/store-event" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="add-poster">
            <input type="file" name="Gambar_Event">
            <img src="assets/Group 26.png" alt="">
            <p>Unggah poster gambar/poster/banner</p>
        </div>
        @error('Gambar_Event')
                <span class="error">{{$message}}</span>
            @enderror
        <div class="add-event">
            <input type="text" placeholder="Nama event*" name="Nama_Event">
            @error('Nama_Event')
            <br>
                <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div class="category-event">
            <select id="category" type="text" name="Kategori_Event">
                <option name="Kategori_Event" value="">Pilih Kategori</option>
                <option name="Kategori_Event" value="Concert">Concert</option>
                <option name="Kategori_Event" value="Talkshow">Talkshow</option>
                <option name="Kategori_Event" value="Webinar">Webinar</option>
            </select>
            @error('Kategori_Event')
            <br>
                <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div class="description-event">
            <label for="description">Deskripsi*</label>
            <textarea name="Deskripsi_Event" id="" cols="10" rows="10"></textarea>
            @error('Deskripsi_Event')
                <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div class="harga-event">
            <input type="text" placeholder="Harga*" name="Harga" value="Rp. ">
            @error('Harga')
            <br>
                <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div class="tanggal-event">
            <input type="date" name="Tanggal_Event">
            @error('Tanggal_Event')
            <br>
                <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div class="lokasi-event">
            <input type="text" placeholder="Lokasi Event*" name="Lokasi_Event">
            @error('Lokasi_Event')
            <br>
                <span class="error">{{$message}}</span>
            @enderror
        </div>
        <div class="lokasi-event">
            <input type="text" placeholder="Nama Organizer*" name="Nama_Organizer">
            @error('Nama_Organizer')
            <br>
                <span class="error">{{$message}}</span>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>