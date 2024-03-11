<!doctype html>
<html lang="en">
<base href="/public">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dormitive</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <link href="home/css/bootstrap-icons.css" rel="stylesheet">

    <link href="home/css/templatemo-festava-live.css" rel="stylesheet">

  
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img src="logo/logoo.png" width="110px">

                

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Room</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Book</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                        <x-app-layout>
                        </x-app-layout>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary" id="logincss" href="{{ route('login') }}"style="background-color: #94d29a; border-color: #94d29a;">Log In</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }} "style="background-color: #94d29a; border-color: #94d29a;">Register</a>
                        </li>
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        


        


        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4" style="margin-top: 80px;">Our Rooms</h1>
                    </div>

                        <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <img src="room_img/{{$room->image}}"
                                class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p>
                                    <strong>Room Title:</strong>
                                    {{ $room->room_title }}
                                </p>

                                <p>
                                    <strong>Description:</strong>
                                    {{ $room->description }}
                                </p>

                                <p>
                                    <strong>Price:</strong>
                                    {{ $room->price }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <section class="contact-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4" style="margin-top: -80px;">Book with us</h2>


                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="{{url('reservation',$room->id)}}" method="post"
                                    role="form">
                                    @csrf
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="name" id="name"
                                                    class="form-control" placeholder="Full name" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="number" name="phone" id="phone"
                                                     class="form-control"
                                                    placeholder="Phone number" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="date" name="checkin" id="checkin"
                                                    class="form-control" placeholder="Checkin" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="date" name="checkout" id="checkin"
                                                    class="form-control" placeholder="" required>
                                            </div>
                                        </div>

                                        <input type="email" name="email" id="email"
                                            class="form-control" placeholder="Email address" required>

                                        <textarea name="message" rows="3" class="form-control"
                                            id="contact-message" placeholder="Message"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Book now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                           
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Dormitive</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-linkedin"></span>
                                </a>
                            </li>
<!-- 
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                


                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Contact Us</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link">
                            09614780212
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:hello@company.com" class="site-footer-link">
                            etsa.ildefonso.up@phinmaed.com
                        </a>
                    </p>
                </div>

                

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Dagupan City, Pangasinan</p>




                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
<!-- 
                <div class="col-lg-2 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Learn More</h5>
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Your Feedback</a>
                            </li>
                        </ul>
                </div> -->




                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="{{url('/')}}" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="{{url('/')}}" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="{{url('/')}}" class="site-footer-link">Rooms</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="{{url('/')}}4" class="site-footer-link">Book</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

      
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.sticky.js"></script>
    <script src="home/js/custom.js"></script>

</body>

</html>