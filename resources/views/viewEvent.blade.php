<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyEvents - View Event</title>
    <link rel="stylesheet" href="{{asset('style/vieweventuser.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/344429efc8.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/344429efc8.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/57a2b68e97.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
       <div id="container">
            <div id="left">
                <img src="{{asset('assets/My Events.png')}}" id="logo" alt="">
                <div class="search-bar">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" name="search" placeholder="" autocomplete="off">
                </div>

                <ul id="nav-menu">
                    <li><a href="">Concert</a></li>
                    <li><a href="">Art & Culture</a></li>
                    <li><a href="">More</a></li>
                </ul>

                
                
            </div>

   
            <div id="right">
                <a href="" style="font-size: 18px;">Support</a>
                <img src="{{asset('assets/profile.png')}}" id="profile" alt="">
            </div>
       </div>
    </nav>

    <div id="eventList">
        <div id="eventList-container">
            <div id="top-part">
                <h4>Your Event List</h4>
                <div id="sort">
                    <p>Sort by Category</p>
                    <img src="{{asset('assets/sort.png')}}" alt="">
                </div>
            </div>

            <div id="card-container">
            

                @foreach($event as $i)

                <div class="card">
                    <div class="left-side">
                        <img class="left-side-img" src="{{asset('/storage/Event/'.$i->Gambar_Event)}}" alt="">
                    <div class="event-desc">
                        <p><span style="font-weight: bolder;">{{$i->Nama_Event}} |</span><span style="font-size: 13px;"> {{$i->Nama_Organizer}}</span></p>
                        <div class="ket-tanggal" style="display: flex; gap: 0.6rem;">
                            <i class="fas fa-calendar-alt"></i>
                            <p>{{$i->Tanggal_Event}}</p>
                        </div>
                        <div class="ket-tempat" style="display: flex; gap: 0.6rem;">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>{{$i->Lokasi_Event}}</p>
                        </div>
                        <div class="descr-event" style="display: flex; gap: 0.8rem; margin-left: 3px; width: 600px;">
                            <i class="fa-solid fa-info"></i>
                            <p>{{$i->Deskripsi_Event}}</p>
                        </div>
                    </div>
                    </div>
                    <div class="right-side">
                        <div class="register-section">
                            <button id="reg-btn"><a href="/create-ticket/{{$i->id}}">Register</a></button>
                            <div class="cp">
                                <i class="fa-solid fa-user"></i>
                                <p>{{$i->Nama_Organizer}}</p>
                                <p>+62 815 9123 1283</p>
                            </div>
                            <p class="price">{{$i->Harga}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
                
            </div>
        </div>
    </div>

    <footer>
        <div id="copyright">
            <img src="{{asset('assets/LogoFooter.png')}}" alt="">
            <p>© 2023 MyEvent. All Right Reserved</p>
        </div>
        <div id="privacy-terms">
            <a href="">Privacy</a>
            <a href="">Terms</a>
        </div>
    </footer>


</body>
</html>