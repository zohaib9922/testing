<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('/images/favicon.png')}}" type="image/x-icon">


       

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'My Hunter') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}?v=1.0" rel="stylesheet"> 
        <link href="{{ asset('css/styles.css') }}?v=1.0" rel="stylesheet"> 
        <link href="{{ asset('css/owl.carousel.min.css') }}?v=1.0" rel="stylesheet"> 

        <?php if (App::environment('local')) { ?>
            <meta name="robots" content="noindex">
            <meta name="googlebot" content="noindex">
        <?php } ?>

       

        @yield('cssContent')
          
    </head>
    <body>
        @include('includes.header')

            <div class="site-content-contain">
                    @yield('content')
            </div>
            
        @include('includes.footer')
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- <script src="/js/jquery-3.4.1.min.js"></script> --}}
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    
    
    
   
    
    <script>
        

   $(document).ready(function(){
  $(".owl-carousel-one").owlCarousel({
    nav: true,
        dots:false,
        autoplayTimeout: 10000,
        responsive:{
            0:{
                items:3,
                nav:true
            },
            700:{
                items:3,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                loop:true,
                autoplay:true,
                dots: false
            }
        }
  });
});
$(document).ready(function(){
  $(".owl-carousel-two").owlCarousel({
    nav: true,
        dots:true,
        autoplayTimeout: 10000,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            700:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                loop:true,
                autoplay:true,
                dots: true
            }
        }
  });
});


   

  
    </script>
    
    
    @yield('jsContent')

</html>
