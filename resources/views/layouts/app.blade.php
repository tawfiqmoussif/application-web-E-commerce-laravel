<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta name="csrf-token" content="{{ csrf_token() }}">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
  <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
  <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
  <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
  -->
  <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
  <script src="themes/js/less.js" type="text/javascript"></script> -->
  
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{asset('themes/bootshop/bootstrap.min.css')}}" media="screen"/>
    <link href="{{asset('themes/css/base.css')}}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive --> 
  <link href="{{asset('themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify --> 
  <link href="{{asset('themes/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('themes/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('themes/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('themes/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('themes/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('themes/images/ico/apple-touch-icon-57-precomposed.png')}}">
  <style type="text/css" id="enject"></style>

  </head>
<body>


<div id="header">
  <div class="container">
    <div id="welcomeLine" class="row">
      
    </div>
  </div>
    <!-- Navbar ================================================== -->

@include('partage.menu')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-ofset-2">
      @include('partage.flash')
    </div>
  </div>
</div>


@yield('content')



<body>
 @include('partage.footer')
  </div>

</div>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/jaime.js') }}"></script>
 <script type="text/javascript">
   var url="{{route('jaime')}}";
   var token="{{ Session::token()}}";
 </script>
 </body>
</html>