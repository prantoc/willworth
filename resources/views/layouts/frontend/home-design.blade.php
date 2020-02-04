<!DOCTYPE html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8"/>
    <title>WillWorth</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="will is creating opportunities on human rights & social empowerment, education & health, livelihood, environmental & disaster preparedness in many countries such as Pakistan, Afghanistan, Myanmar, Philippines, Uganda, Tanzania, Sierra Leone, Liberia, South Sudan, Nepal etc." />
    <meta name="keywords" content="will, Creating, Opportunities, Best NGO in BD, Top ranking ngo in Bangladesh, Realise, Potential, Bangladesh, Pakistan, Afghanistan, Myanmar, Philippines, Uganda, Tanzania, Sierra Leone, Liberia, South Sudan, Nepal, human rights, social development, economic empowerment, health, nutrition, education, gender equality, social enterprises, livelihood training, environmental sustainability, climate change, disaster preparedness" />
    <meta name="author" content="Shuvra" />
    <meta property="og:image" content="templates/img/157x30.png" />

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/frontend/templates/saga/home-template/css/fonts.roboto.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/templates/saga/home-template/vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/frontend/templates/saga/home-template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('assets/frontend/templates/saga/home-template/css/animate.css')}}" rel="stylesheet">
    <!--<link href="css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="/{{ asset('assets/frontend/templates/saga/home-template/css/owl.theme.default.css')}}" rel="stylesheet">-->

    <!-- MENU PLUGIN STYLES -->
    <link href="{{ asset('assets/frontend/templates/saga/home-template/css/bootstrap-dropdownhover.css')}}" rel="stylesheet">

    <!-- THEME STYLES -->
    <link href="{{ asset('assets/frontend/templates/saga/home-template/css/layout1744.css?14857')}}" rel="stylesheet" type="text/css"/>

    <!-- Fontawsome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/templates/img/157x30.png')}}"/>

          
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>
        
          
        @include('layouts.frontend.header')

            @yield('content')

        @include('layouts.frontend.footer')


    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top"><img style="width: 32px;" src="{{ asset('assets/frontend/templates/img/157x30.png')}}" alt=""></a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
    <!-- <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script> -->
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/js/components/bootstrap-dropdownhover.js')}}" type="text/javascript"></script>
    <!--<script src="js/components/owl.carousel.min.js" type="text/javascript"></script>-->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/frontend/templates/saga/home-template/js/layout2d67.js?72463')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/js/components/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/frontend/templates/saga/home-template/js/components/masonry.min.js')}}" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131609553-1"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/js/all.min.js"></script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-131609553-1');
    </script>
    <script>

        // number count for stats, using jQuery animate

    $('.counting').each(function() {
      var $this = $(this),
          countTo = $this.attr('data-count');
      
      $({ countNum: $this.text()}).animate({
        countNum: countTo
      },

      {

        duration: 3000,
        easing:'linear',
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          $this.text(this.countNum);
          //alert('finished');
        }

      });  
      

    });
    </script>
</body>
</html>