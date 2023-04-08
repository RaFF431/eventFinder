<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('style/adminpagestyle.css')}}">
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
                <button>Dashboard</button>
           </div>
        </div>
    </nav>

    <div id="web-content">
        <div class="container">
            <div class="top-part">
                <div class="search-bar">
                    <input type="text" name="search" placeholder="Search" autocomplete="off">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <a href="addnewevent.html"><button>Add</button></a>
            </div>
        </div>

        <div class="table-data">
            <table style="width:100%">
                <tr style="height: 40px;">
                    <th style="width: 15%;">Name</th>
                    <th style="width: 12%;">Category</th>
                    <th>Description</th>
                    <th style="width: 15%;">Location</th>
                    <th style="width: 15%;">Date & Time</th>
                </tr>
                @foreach ($event as $i)
                    <tr style="height: 50px;">
                        <td>{{$i->Nama_Event}}</td>
                        <td>{{$i->Kategori_Event}}</td>
                        <td>{{$i->Deskripsi_Event}}</td>
                        <td>{{$i->Lokasi_Event}}</td>
                        <td>{{$i->Tanggal_Event}}</td>
                    </tr>
                @endforeach
                <tr style="height: 50px;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>