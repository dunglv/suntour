<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Home') | Sun Tour - Lorem ipsum dolor sit</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Spa Sublime Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <link rel="icon" type="image/icon" href="{{url('/')}}/images/ui/logo.png">

    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- custom-theme -->
    <!-- Custom Theme files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Latest compiled and minified JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/style11.css" />
    <!-- menu css -->
    <link href="{{url('/')}}/css/style.css" type="text/css" rel="stylesheet" media="all">
    {{-- <link href='{{url(' / ')}}/css/simplelightbox.min.css' rel='stylesheet' type='text/css'> --}}
    <!-- Light-box css -->
    <link rel="stylesheet" href="{{url('/')}}/css/flexslider.css" type="text/css" media="all" property="" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <!-- //font-awesome icons -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- //web-fonts -->
</head>

<body class="bg">
    <div class="banner-w3layouts" id="@yield('page', '')">
        @include('layouts.nav')
        @yield('slider')
    </div>
    <!-- //banner -->
    @yield('content')
    <!-- //Gallery -->
    <!-- footer -->
    @include('layouts.footer')
    <!-- //footer -->
    <!-- js -->
    <script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
    <!-- //js -->
    <!-- Calendar -->
    <script src="js/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
    </script>
    <!-- //Calendar -->
    <script type="text/javascript" src="js/simple-lightbox.min.js"></script>
    <script>
   
    </script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--search-bar-->
    <script src="js/main.js"></script>
    <!--//search-bar-->
    <!--responsiveslides js-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
    </script>
    <!--responsiveslides js-->
    <!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>
    <!-- //flexSlider -->
    <!--menu script-->
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/demo1.js"></script>
    <!--//menu script-->
    <script type="text/javascript">
    // jQuery(document).ready(function($) {
    //     $(".scroll").click(function(event) {
    //         event.preventDefault();
    //         $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    //     });
    // });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
    // jQuery(document).ready(function($) {
    //     $(".scroll").click(function(event) {
    //         event.preventDefault();
    //         $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    //     });
    // });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- smooth scrolling -->
    <script type="text/javascript">
    $(document).ready(function() {
        /*
        	var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        	};
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
    </script>
    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->

</html>