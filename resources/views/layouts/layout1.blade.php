<?php

use App\Models\Carousel;
use App\Models\Contacts;
use Illuminate\Support\Facades\App;
use TCG\Voyager\Voyager;

$carousels=Carousel::orderBy('order')->where('status',1)->get();
$contact=Contacts::orderBy('order')->where('status',1)->first();
$lang=App::getlocale();
?>
<!DOCTYPE html>
<html lang={{$lang}}>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link rel="stylesheet" href="/app/css/bootstrap-scss/bootstrap-grid.min.css">
        <link rel="stylesheet" href="/app/libs/slick/slick.css">
        <link rel="stylesheet" href="/app/libs/wow/css/libs/animate.css">
        <link rel="stylesheet" href="/app/libs/fancybox/jquery.fancybox.min.css">
        <link rel="stylesheet" href="/app/libs/custom-modal/custom-modal.css">
        <link rel="stylesheet" href="/app/css/style.min.css">
        <link rel="stylesheet" href="/app/css/media.min.css">
        <title>{{__("Delice Chocolate")}}</title>
    </head>
    <body>
        <!--HEADER BEGIN-->
            <div class="header header-h" style="height: auto;">
                <nav class="nav">
                    <div class="nav-menu flex-row">
                        <div class="nav-brand">
                            <a href="#">
                                <img src="/app/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="nav-block">
                            <ul class="nav-items">
                                <li class="nav-close-icon" style="display: none">
                                    <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/>
                                    </svg>
                                </li>
                                <li class="nav-link ">
                                    <a href="#">{{__("Home")}}</a>
                                </li>
                                <li class="nav-link active">
                                    <a href="#">{{__("About us")}}</a>
                                </li>
                                <li class="nav-link ">
                                    <a href="#">{{__("Products")}}</a>
                                </li>
                                <li class="nav-link">
                                    <a href="#">{{__("Gallery")}}</a>
                                </li>
                                <li class="nav-link">
                                    <a href="#">{{__("News")}}</a>
                                </li>
                                <li class="nav-link">
                                    <a href="#">{{__("Contacts")}}</a>
                                </li>
                            </ul>
                            <div class="social">
                                <div class="header-top-search">
                                    <div class="search-modal" style="display: none">
                                        <form class="search-modal-form">
                                            <input type="text" class="search-modal-input" placeholder="?????????? ???? ??????????">
                                            <button class="search-modal-icon">
                                                <img src="/app/images/search.png" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <button class="social-item-button">
                                    <img src="/app/images/search.png" alt="">
                                </button>

                                <div class="lang-current"><?=strtoupper(App::getLocale())?>
                                    <svg version="1.1" height="12" width="25" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512.011 512.011" style="enable-background:new 0 0 512.011 512.011;"
                                        xml:space="preserve">
                                        <path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
                                            s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
                                            C514.096,145.416,514.096,131.933,505.755,123.592z"/>
                                    </svg>
                                    <ul class="lang-list">
                                        <li class="lang-list-item"><a href="/lang/ru">RU</a></li>
                                        <li class="lang-list-item"><a href="/lang/en">EN</a></li>
                                        <li class="lang-list-item"><a href="/lang/uz">UZ</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="toggle-collapse" style="display: none">
                                <div class="toggle-icon">
                                    <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1"
                                        viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        <!--HEADER END-->

        <!--MAIN BEGIN-->
            @yield('content')
        <!--MAIN END-->
        
        <!--FOOTER BEGIN-->
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row footer-inner">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 order-xl-0 order-lg-0 order-md-1 order-sm-1 order-1">
                                <div class="footer-info wow fadeInLeft" data-wow-duration="2s">
                                    <div class="footer-info-title1"><span>{{__("Adress")}}:</span>
                                        <p>
                                            {{$contact->address()}}
                                        </p>
                                    </div>
                                    <p class="footer-info-title"><span>{{__("Phone")}}:</span> {{$contact->phone}}</p>
                                </div>  
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-0 order-sm-0 order-0">
                                <div class="footer-logo wow flash">
                                    <img src="/app/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 order-xl-2 order-lg-2 order-md-2 order-sm-2 order-0">
                                <div class="footer-social wow fadeInRight" data-wow-duration="1s">
                                    <a href="{{$contact->facebook}}" class="footer-social-item">
                                        <svg class="footer-social-item-facebook" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                            width="24px" height="24px" viewBox="0 0 24 24">
                                            <path d="M16.403,9H14V7c0-1.032,0.084-1.682,1.563-1.682h0.868c0.552,0,1-0.448,1-1V3.064c0-0.523-0.401-0.97-0.923-1.005 C15.904,2.018,15.299,1.999,14.693,2C11.98,2,10,3.657,10,6.699V9H8c-0.552,0-1,0.448-1,1v2c0,0.552,0.448,1,1,1l2-0.001V21 c0,0.552,0.448,1,1,1h2c0.552,0,1-0.448,1-1v-8.003l2.174-0.001c0.508,0,0.935-0.381,0.993-0.886l0.229-1.996 C17.465,9.521,17.001,9,16.403,9z"/>
                                        </svg>
                                    </a>
                                    <a href="{{$contact->telegram}}" class="footer-social-item">
                                        <svg viewBox="0 -31 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m123.195312 260.738281 63.679688 159.1875 82.902344-82.902343 142.140625 112.976562 100.082031-450-512 213.265625zm242.5-131.628906-156.714843 142.941406-19.519531 73.566407-36.058594-90.164063zm0 0"/>
                                        </svg>
                                    </a>
                                    <a href="{{$contact->instagram}}" class="footer-social-item">
                                        <svg viewBox="0 0 511 511.9"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/>
                                            <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/>
                                            <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="footer-bottom">
                            <p class="footer-bottom-title">?? DELICE CHOCOLATE</p>
                            <p class="footer-bottom-title">2020 - Web developed by
                                <a href="">SOS Group</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        <!--FOOTER END-->
            <script src="/app/libs/jquery/jquery.min.js"></script>
            <script src="/app/libs/jquery-validate/jquery.validate.min.js"></script>
            <script src="/app/libs/slick/slick.min.js"></script>
            <script src="/app/libs/wow/dist/wow.min.js"></script>
            <script src="/app/https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
            <script src="/app/https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
            <script src="/app/libs/custom-modal/custom-modal.js"></script>
            <script src="/app/libs/fancybox/jquery.fancybox.min.js"></script>
            <script src="/app/js/main.js"></script>
            <script src="/js/java.js"></script>   
            <script>
                // Initialize and add the map
                function initMap() {
                    // The location of Uluru
                    var uluru = {lat: -25.344, lng: 131.036};
                    // The map, centered at Uluru
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 4, center: uluru});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: uluru, map: map});
                }
        </script>
        <script async="" defer=""
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlFroO7C1GYV5PKyg1IOXVvBp42eAZrBU&amp;callback=initMap">
        </script>
    </body>
</html>