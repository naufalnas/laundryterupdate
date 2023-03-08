<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>DICUCIIN</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{asset('capiclean/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('capiclean/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('capiclean/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('capiclean/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="{{asset('capiclean/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{asset('capiclean/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('capiclean/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('capiclean/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
</head>
<body>
  <!--header section start -->
    <div class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <div class="logo"><a href="index.html"><img src="{{asset('capiclean/images/dicuciin2.png')}}"></a></div>
          </div>
          <div class="col-md-10">
            <div class="menu_text">
              <ul>
                <div class="togle_3">
                  <div class="menu_main">
                    <div class="padding_left0"><a href="{{ route('register.store')}}">Register</a>
                    <span class="padding_left0">
                      <a href="{{ route('login.proses') }}">Login</a>
                    </span>
                    <a class="padding_left0" href="/">Home</a>
                  </div>
                  </div>
                  <div class="shoping_bag"></div>
                </div> 
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.html">Home</a>
                  <a href="services.html">Services</a>
                  <a href="about.html">About</a>
                  <a href="choose.html">Choose</a>
                  <a href="team.html">Team</a>
                  <a href="contact.html">Contact Us</a>
                </div>
                </div>
                <span class="navbar-toggler-icon"></span>
                <span onclick="openNav()"></span>
              </ul>
            </div>      
          </div>
        </div>
      </div>
    <!-- banner section start -->
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <h1 class="banner_taital">BEST YOUR </h1> 
            <h1 class="banner_taital_1">DICUCIIN</h1>
            <p class="banner_text text-dark">Percayakan kami untuk layanan terbaik, kami menjamin kualitas dan keamanan pakaian Anda.</p>
            <div class="contact_bt"><a href="{{ route('login.proses') }}">LOGIN<span class="contact_padding"><img src="{{asset('capiclean/images/contact-icon.png')}}"></span></a>
          </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-sm-5">
              <img src="{{asset('capiclean/images/cucianbaju.png')}}" style="width:100%;"class="image_1">
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
    </div>
    <!-- team section start -->
    <!-- newsletter section start -->
    <!-- newsletter section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="footer_main">
          <div class="footer_left">
            <h1 class="contact_taital"><span>Contact </span><span>Us</span></h1>
          </div>
          <div class="footer_left">
            <div class="location_text"><a href="#"><img src="{{asset('capiclean/images/map-icon.png')}}"><span class="padding_left_15">Locations</span></a></div>
          </div>
          <div class="footer_left">
            <div class="location_text"><a href="#"><img src="{{asset('capiclean/images/call-icon.png')}}"><span class="padding_left_15">+62 81398146185</span></a></div>
          </div>
          <div class="footer_left">
            <div class="location_text"><a href="#"><img src="{{asset('capiclean/images/map-icon.png')}}"><span class="padding_left_15">dicuciin@gmail.com</span></a></div>
          </div>
        </div>
        <div class="contact_section">
          <div class="row">
            <div class="col-md-6">
              <div class="mail_section">
                <input type="" class="email_text" placeholder="Name" name="Name">
                <input type="" class="email_text" placeholder="Email" name="Email">
                <input type="" class="email_text" placeholder="Phone Number" name="Phone Number">
                <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                <div class="send_bt"><a href="#">send</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="map_main">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                </div>
              </div>
              <div class="social_icon">
                <ul>
                  <li><a href="https://www.instagram.com/falnasloh/"><img src="{{asset('capiclean/images/instagram-icon1.png')}}"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">Copyright 2023 <a href="https://github.com/naufalnas">NaufalNas</a> By Naufal Nashrulloh</p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{asset('capiclean/js/jquery.min.js')}}"></script>
    <script src="{{asset('capiclean/js/popper.min.js')}}"></script>
    <script src="{{asset('capiclean/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('capiclean/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('capiclean/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('capiclean/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('capiclean/js/custom.js')}}"></script>
    <!-- javascript --> 
    <script src="{{asset('capiclean/js/owl.carousel.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
         
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
     function openNav() {
     document.getElementById("myNav").style.width = "100%";
    }
     function closeNav() {
     document.getElementById("myNav").style.width = "0%";
    }
    </script>  
</body>
</html>