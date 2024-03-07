<!doctype html>
<html lang="en">

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

    <!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->
</head>

<body>

    <main>

        <!-- <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Welcome to Music Festival 2023</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header> -->


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    Dormitive
                </a>

                <!-- <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#section_3">Room</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#section_4">Contact</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                        <x-app-layout>
                        </x-app-layout>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Log In</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth
                        @endif
                    </ul>

                    <!-- <a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a> -->
                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>Dreamers Presents</small>

                        <h1 class="text-white mb-5">Dormitive</h1>

                        <!-- <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a> -->
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <!-- <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                10 - 12<sup>th</sup>, Dec 2023
                            </h5> -->
                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <!-- <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                National Center, United States
                            </h5> -->
                        </div>

                        <div class="social-share">
                            <!-- <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg_home">
                <img src="home/images/bb.png" alt="Description of your image">
            </div>

        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">About Us</h2>

                            <p class="text-white">This project aims to develop a comprehensive dorm-booking system, providing users with a seamless
                            and user-friendly platform to search, compare, and book accomodations. The system will offer a diverse range of 
                            features to enhance the overall booking experience for both guests and dorm administrators.</p>

                            <h6 class="text-white mt-4">Once in Lifetime Experience</h6>

                            <p class="text-white">You are not allowed to redistribute the template ZIP file on any other
                                website without a permission.</p>

                            <h6 class="text-white mt-4">Whole Night Party</h6>

                            <p class="text-white">Please tell your friends about our website. Thank you.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="home/images/pexels-alexander-suhorucov-6457579.jpg" class="about-image img-fluid">

                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>


                                <div class="ms-4">
                                    <h3>a happy moment</h3>

                                    <p class="mb-0">your amazing festival experience with us</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Meet Artists</h1>
                    </div>

                        @foreach($room as $room)
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
                    @endforeach
                    
                </div>
            </div>
        </section>



        <section class="contact-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Reach Us Out</h2>


                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                    role="form">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="contact-name" id="contact-name"
                                                    class="form-control" placeholder="Full name" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="contact-email" id="contact-email"
                                                    pattern="[^ @]*@[^ @]*" class="form-control"
                                                    placeholder="Email address" required>
                                            </div>
                                        </div>

                                        <input type="text" name="contact-company" id="contact-company"
                                            class="form-control" placeholder="Company" required>

                                        <textarea name="contact-message" rows="3" class="form-control"
                                            id="contact-message" placeholder="Message"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Send message</button>
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
                                    <span class="bi-apple"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-pinterest"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

            <!-- col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0 -->

                


                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 090-080-0760" class="site-footer-link">
                            090-080-0760
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:hello@company.com" class="site-footer-link">
                            hello@company.com
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
                </div>




                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#section_1" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_2" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_3" class="site-footer-link">Rooms</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_4" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mt-5">
                        <p class="copyright-text">Created by: Dreamers</a></p>
                    </div>

                    <div class="col-lg-8 col-12 mt-lg-5">
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
                    </div>
                </div>
            </div>
        </div> -->
    </footer>

    <!--

T e m p l a t e M o

-->

    <!-- JAVASCRIPT FILES -->
    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.sticky.js"></script>
    <!-- <script src="home/js/click-scroll.js"></script> -->
    <script src="home/js/custom.js"></script>

</body>

</html>