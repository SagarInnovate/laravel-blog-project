@php
$a = app('App\Http\Controllers\indexController')->setting();

@endphp


<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
@php
   echo $a->additional_head_content;
@endphp
<link rel="shortcut icon" type="image/jpg" href="{{url('/'.$a->logo)}}"/>
    <meta name="title" content="{{$a->website_name}}">
<meta name="description" content="{{$a->description}}">
<meta name="keywords" content="{{$a->keywords}}">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    @yield('head')
    <link rel="stylesheet" media="screen"  href="{{ css_path('nicepage.css') }}">
   

    {{-- <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900|PT+Sans:400,400i,700,700i|Oswald:200,300,400,500,600,700"> --}}

</head>

<body  data-home-page="{{ url('/') }}" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
    <header class=" u-clearfix u-header u-section-row-container" id="sec-4200" style="background-image: none">
        <div class="u-section-rows">
            <div class="u-align-center-xs u-clearfix u-section-row u-sticky u-sticky-99b4 u-white u-section-row-1"
                data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""
                id="sec-75ae">
                <div class="u-clearfix u-sheet u-sheet-1">
                    <form action="#" method="get"
                        class="u-align-left u-border-1 u-border-grey-30 u-radius-50 u-search u-search-left u-white u-search-1">
                        <button class="u-search-button" type="submit">
                            <span class="u-search-icon u-spacing-10">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                    viewBox="0 0 56.966 56.966">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-79b1"></use>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="svg-79b1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                    xml:space="preserve" class="u-svg-content">
                                    <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                        <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
                        <input type="hidden" name="formServices" value="2fee015ca6b35814c2ecb12a9ad370a8">
                    </form>
                    <p class="u-align-left-xs u-custom-font u-font-oswald u-text u-text-default u-text-1">{{$a->website_name}}
                    </p>
                    <nav class="u-menu u-menu-hamburger u-menu-open-right u-offcanvas u-menu-1"
                        data-responsive-from="XL">
                        <div class="menu-collapse">
                            <a class="u-button-style u-nav-link" href="#"
                                style="padding: 4px 0px; font-size: calc(1em + 8px);">
                                <svg class="u-svg-link" viewBox="0 0 24 24">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b471"></use>
                                </svg>
                                <svg class="u-svg-content" version="1.1" id="svg-b471" viewBox="0 0 16 16"
                                    x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <rect y="1" width="16" height="2"></rect>
                                        <rect y="7" width="16" height="2"></rect>
                                        <rect y="13" width="16" height="2"></rect>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="u-custom-menu u-nav-container">
                            <ul class="u-nav u-unstyled">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">category</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/about')}}">About</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{url('/contact')}}">Contact</a>

                                </li>

                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/privacy-policy')}}">Privacy Policy</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/terms-and-conditions')}}">Terms And Conditions</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/disclaimer')}}">Disclaimer</a>
                                </li>
                            </ul>
                        </div>
                        <div class="u-custom-menu u-nav-container-collapse">
                            <div class="u-container-style u-inner-container-layout u-sidenav u-white">
                                <div class="u-inner-container-layout u-sidenav-overflow">
                                    <div class="u-menu-close"></div>
                                    <ul
                                        class="u-align-center u-custom-font u-font-oswald u-nav u-popupmenu-items u-spacing-5 u-unstyled u-nav-2">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="#">category</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{url('/about')}}">About</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="{{url('/contact')}}">Contact</a>
                                        </li>

                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/privacy-policy')}}">Privacy Policy</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/terms-and-conditions')}}">Terms And Conditions</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/disclaimer')}}">Disclaimer</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                        </div>
                    </nav>
                </div>





                <style class="u-sticky-style" data-style-id="99b4">
                    .u-sticky-fixed.u-sticky-99b4,
                    .u-body.u-sticky-fixed .u-sticky-99b4 {
                        box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4) !important
                    }

                    .u-sticky-fixed.u-sticky-99b4:before,
                    .u-body.u-sticky-fixed .u-sticky-99b4:before {
                        borders: top right bottom left !important
                    }
                </style>
            </div>
            <div class="u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-section-row u-section-row-2" id="sec-b337">
                <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-2"></div>





            </div>
        </div>
    </header>
