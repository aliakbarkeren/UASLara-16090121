<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>FORUM DISKUSI ONLINE MAHASISWA</title>
    <!-- Icons-->
    <link href="{{asset('public/template/src/node_modules/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/template/src/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/template/src/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/template/src/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('public/template/src/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/template/src/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <div class="continer">
    @include('header')
    @yield('main')
    </div>
    @yield('footer')
      
      
      
    
    <footer class="app-footer">
      
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('public/template/src/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('public/template/src/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('public/template/src/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/template/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('public/template/src/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/template/src/node_modules/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('public/template/src/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('public/template/src/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')}}"></script>
    <script src="{{asset('public/template/src/js/main.js')}}"></script>

    <script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
  </body>
</html>
