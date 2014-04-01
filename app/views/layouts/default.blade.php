<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    {{HTML::style('assets/css/style.css')}}
</head>
<body>
  <header id="topNav" style="height: 92px;">
        <div class="container">

          <!-- Mobile Menu Button -->
          <button class="btn" data-toggle="collapse" data-target=".nav-main-collapse" style="margin-top: 8px;">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Logo text or image -->
          <a class="logo" href="index.html" style="line-height: 50px; margin-top: 0px;">
            <img src="assets/images/logo.png" alt="Atropos" width="275px">
          </a>
        </div>
      </header>
  <span id="header_shadow" style="top: 92px;"></span>




  <div id="wrapper">
    <section class="container content" style="margin-top:50px">
      @if (Session::has('alert') or Session::has('error'))
        <div class="alert alert-info">{{Session::get('alert')}}</div>
        <div class="alert alert-error">{{Session::get('error')}}</div>
      @endif
      <div class="container">
        <div class="container">
          @yield('content')      
        </div> 
      </div>
    </section>
  </div>
  
</body>
</html>