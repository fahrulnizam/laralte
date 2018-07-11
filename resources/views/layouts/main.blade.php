<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LaraLTE | @yield('title')</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ asset('css/skins/skin-blue.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
          <b>L</b>TE
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <b>Lara</b>LTE
        </span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        @include('layouts.navbar')
      </nav>
      
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      @include('layouts.sidebar')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
      <!-- Content Header (Page header) -->
      <section class="content-header">
        @yield('page-header')
      </section>

      <!-- Main content -->
      <section class="content container-fluid">
        @yield('content')
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      @include('layouts.footer')
    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('js/adminlte.min.js') }}"></script>

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>