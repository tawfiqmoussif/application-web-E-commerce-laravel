@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


   <title>Ecommerce</title>
  
        


    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    
                </div>
            @endif

      

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            @include('partage.menuCategorie')
            <!-- Sidebar end=============================================== -->
            <div class="span9">
               
                <h4>les produits </h4>
                <ul class="thumbnails">
                    
                    @foreach($dataS as $dataS)
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="{{url('product_detail/'.$dataS->id)}}">
                        <img src="upload/{{$dataS->photo}}" alt=""/></a>
                            <div class="caption">
                                <h5>{{$dataS->nom}}</h5>
                                

                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Ajouter à <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{$dataS->prix}}</a></h4>
                              
                            </div>
                        </div>
                    </li>
                    @endforeach
          
                </ul>

            </div>
        </div>
    </div>
</div>
<!-- Footer ================================================================== -->

<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>

<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
    <link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
    <script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>

</div>

</body>
</html>
@endsection