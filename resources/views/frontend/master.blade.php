<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Web Jual</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   @include('frontend.tools.loading')
   <!-- end loader -->
   <!-- header -->
   @include('frontend.tools.header')
   <!-- end header -->
   @yield('content')

   <!-- end Contact Us-->
   <!-- footer start-->
   @include('frontend.tools.footer')

   <!-- Javascript files-->
   <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
   <script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/frontend/js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{asset('assets/frontend/js/plugin.js')}}"></script>
   <!-- sidebar -->
   <script src="{{asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
   <!-- javascript -->
   <script src="{{asset('assets/frontend/js/owl.carousel.js')}}R"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function () {

            $(this).addClass('transition');
         }, function () {

            $(this).removeClass('transition');
         });
      });
   </script>
</body>

</html>
