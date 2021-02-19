<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Chupchi Shop" />
      <meta name="keywords" content="Chupchi Shop" />
      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
      <meta name="author" content="Chupchi Shop ">
      <meta name="og:site_name" content="Chupchi Shop" />
      <meta name="og:type" content="article" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <link rel="icon" type="image/png" href="{{ asset('assets/img/chupchi_logo.png') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-icons.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slicknav.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu_sideslide.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vegas.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
   </head>
   <body>
      <header id="header-wrap">
         <div class="menu-wrap">
            <div class="menu navbar">
               <div class="menu-list navbar-collapse">
                  <ul class="onepage-nev navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="#header-wrap">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#services">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                     </li>
                     @guest
                        @if (Route::has('login'))
                           @auth
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                              </li>
                           @else
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">Login</a>
                              </li>
                              @if (Route::has('register'))
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                 </li>
                              @endif
                           @endauth
                        @endif
                     @else
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                        </li>
                        <li>
                           <a class="nav-link" href="{{ route('logout') }}" 
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                           </form>
                        </li>                        
                     @endguest
                  </ul>
               </div>
            </div>
            <button class="close-button" id="close-button"><i class="lni-close"></i></button>
         </div>
         <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar menu-bg">
            <div class="container">
               <div class="navbar-header">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <span class="lni-menu"></span>
                  <span class="lni-menu"></span>
                  <span class="lni-menu"></span>
                  </button>
                  <a href="{{ url('/') }}" class="navbar-brand"><img src="assets/img/chupchi_logo.png" alt=""></a>
               </div>
               <div class="collapse navbar-collapse" id="main-navbar">
                  <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                     <li class="nav-item" id="open-button">
                        <a class="nav-link">
                        <i class="lni-menu"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <ul class="mobile-menu">
               <li>
                    <a href="#header-wrap">Home</a>
               </li>
               <li>
                    <a href="#services">About Us</a>
               </li>
               <li>
                    <a href="#contact">Contact</a>
               </li>
               @guest
                  @if (Route::has('login'))
                     @auth
                        <li>
                           <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                        </li>
                     @else
                        <li>
                           <a href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                           <li>
                              <a href="{{ route('register') }}">Register</a>
                           </li>
                        @endif
                     @endauth
                  @endif
               @else
                  <li>
                     <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                  </li>
                  <li>
                     <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </li>                        
               @endguest
            </ul>
         </nav>
      </header>
      <section class="intro">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="heading-count">
                     <h2></h2>
                     <p></p>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row countdown justify-content-center">
                  </div>
                  <a href="#contact" class="btn btn-common">Contact Us</a>
                  <a href="#services" class="btn btn-border">About Us</a>
                  <div class="social mt-4">
                    <a class="instagram" href="https://www.instagram.com/chupchi.shop/"><i class="lni-instagram-filled"></i></a>
                  </div>
                  <a href="#services" class="target-scroll page-scroll"><i class="lni-chevron-down"></i></a>
               </div>
            </div>
         </div>
      </section>
      <section id="services" class="section-padding">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 col-lg-8 col-xs-12 text-center">
                    <h6 class="subtitle">
                        What We Do
                    </h6>
                    <h2 class="section-title">
                        Chupchi Shop
                    </h2>
                    <div class="section-info"> 
                        Tired when everything is like everyone else
                    </div>
               </div>
            </div>
            <div class="row">
            </div>
         </div>
      </section>
      <section id="contact" class="section-padding">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 col-lg-8 col-xs-12 text-center">
                  <h6 class="subtitle">
                     Connect With Us
                  </h6>
                  <h2 class="section-title">
                    Chupchi Shop
                  </h2>
                  <div class="section-info">

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8">
                  <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                     <div class="row">
                        <div class="col-md-6 form-line">
                           <div class="form-group">
                              <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required data-error="Please enter your name">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-md-6 form-line">
                           <div class="form-group">
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-md-12 form-line">
                           <div class="form-group">
                              <input type="tel" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea class="form-control" rows="4" id="message" name="message" required data-error="Write your message"></textarea>
                           </div>
                           <div class="form-submit">
                              <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
                              <div id="msgSubmit" class="h3 text-center hidden"></div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-4 contact-right">
                  <div class="contact-box">
                     <h4>Address</h4>
                     <p>
                        Moscow <br> Russian Federation
                     </p>
                  </div>
                  <div class="contact-box">
                     <h4>Call Us</h4>
                     <p>+7 995 600 26 51</p>
                  </div>
                  <div class="contact-box">
                     <h4>Say Hello</h4>
                     <p>
                        <a href="#"><span class="__cf_email__" data-cfemail="660f08000926031e070b160a034805090b">[email&#160;protected]</span></a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="footer-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer-text text-center">
                     <ul class="social-icon">
                        <li>
                           <a class="instagram" href="https://www.instagram.com/chupchi.shop/"><i class="lni-instagram-filled"></i></a>
                        </li>
                     </ul>
                     <p>Copyright © 2020 <a href="www.chupchi.shop"></a>| Crafted by <a href="#" target="_blank">Chupchi Shop</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
      </a>
      <div id="preloader">
         <div class="loader" id="loader-1"></div>
      </div>
      <!--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">-->
      </script><script src="assets/js/jquery-min.js"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/vegas.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
      <script src="{{ asset('assets/js/menu.js') }}"></script>
      <script src="{{ asset('assets/js/classie.js') }}"></script>
      <script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('assets/js/wow.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
      <script src="{{ asset('assets/js/contact-form-script.min.js') }}"></script>
   </body>
</html>