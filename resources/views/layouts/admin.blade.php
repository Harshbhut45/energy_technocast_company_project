<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>@stack('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ ('/css/custom.css') }}">

    <!-- Navbar-CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600%2C400%7CRoboto:500" rel="stylesheet" property="stylesheet" type="text/css" media="all">

   <!-- slider-CSS -->
   <link href="https://googledrive.com/host/0B1RR6fhjI2QROGt0MTFoVkhMdUk/fonts.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

   <!-- header-dropdown-CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
    <body>
      <div id="entry-wrapper" >
      <header id="header-default">
				<div class="entry-top">	
        <nav class="navbar-light" id="menu-main-menu">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
              &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                <div class="container">
                 <div class="row">
                  <div class="col-sm-9 col-xs-12">
                    <ul class="list-inline helpdesk">
                      <li><a><img src="image/email.png" style="height:15px;width:15px;margin-right:10px;">info@energytechnocast.com</a></li>
                      <li><a><span class="fa fa-phone" style="color:#d65d27;height:15px;width:15px;margin-right:10px;"></span> +91 75 75 88 000 1</a></li>                                        
                      <li><img src="image/EnergyTechnocastISO.png" style="height:15px;width:15px;margin-right:10px;">ISO 9001:2008 CERTIFICATE</a></li>
                  </ul>
                  </div>
                  <div class="col-sm-3 col-xs-12">
                    <ul class="navbar-nav nav-flex-icons pull-sm-right m-b-0">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                 </div>
                 </div>
                </div>
            </div>
          </nav>
        </div>
          <div class="topheader">
          <nav class="navbar bg-faded">
            <div class="container">
            <a class="navbar-brand"  href="#"><img src="image/logo.png"></a>
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#CollapsingNavbar" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
              &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="topheader">
              <ul class="nav navbar-nav pull-sm-right">
                <li class="nav-item active"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/abouts-us">About-US</a></li>
                <li class="nav-item"><a class="nav-link" href="/technical-capabilities">Technical Capabilities</a></li>
                <li class="nav-item"><a class="nav-link" href="/process">Process</a></li>
                <li class="nav-item"><a class="nav-link" href="/quality-assurance">Quality Assurance</a></li>
                <li class="dropdown1">
                  <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Industries Served </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="row">
                      <div class="column">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 4</a>
                      </div>
                      <div class="column">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 4</a>
                      </div>
                      <div class="column">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 4</a>
                      </div>
                      
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/career">Career</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
                
              </ul>
             
             
            </div>
            </div>
          </nav>
          
            
      </header>
    


        <div class="">
            @yield('content')
        </div>

        @include('includes.footer')

        
     <!-- Navbar-js -->  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
    

      <!-- Dropdown-js --> 
      <script src="{{ asset('js/dropdown.js') }}"></script>
      <!-- Scrolltop-js --> 
      <script src="{{ asset('js/scrolltop.js') }}"></script>
      <!-- slider-js --> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
      <script src="{{ asset('js/slider.js') }}"></script>
     
      

      {{-- <script>
          $(document).ready(function() {
          $('.nav-item').on('click',function() {
            //  console.log("Clicked");
             $('.nav-item a.active').removeClass('active');
             $(this).addClass('active');
         });
        });
        </script> --}}
      
        <script>
        $(document).ready(function(){
          var scrollTop = 0;
          $(window).scroll(function(){
            scrollTop = $(window).scrollTop();
             $('.counter').html(scrollTop);
            
            if (scrollTop >= 100) {
              $('#header-default .navbar-brand ').addClass('scrolled-nav');
              $('#header-default .pd-t-1 ').addClass('scrolled-nav1');
            } else if (scrollTop < 100) {
              $('#header-default .navbar-brand').removeClass('scrolled-nav');
              $('#header-default .pd-t-1').removeClass('scrolled-nav1');
            } 
            
          }); 
          
        });
      </script>


  {{-- <script>
    $(document).ready(function(){
      var scrollTop = 0;
      $(window).scroll(function(){
        scrollTop = $(window).scrollTop();
         $('.counter').html(scrollTop);
         $('#header-default .navbar-brand').on('click', function(){
         })
        // /* if (scrollTop >= 100) {
        //   $('#header-default>.navbar-brand').addClass('scrolled-nav');
        // } else if (scrollTop < 100) {
        //   $('#header-default>.navbar-brand').removeClass('scrolled-nav');
        // }  */
        
      }); 
      
    });
  </script> --}}
   <script>
$(document).ready(function(){
    $(".dropdown1").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
   </script>


        
    </body>
</html>