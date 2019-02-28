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

      


<!-- Header End====================================================================== -->
<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/>
                    
                    
                </div>
            </div>
            
            <div class="item">
                <div class="container">
                    <img src="themes/images/carousel/2.png" alt=""/>
                    

                </div>
            </div>
            <div class="item">
                <div class="container">
                    <img src="themes/images/carousel/3.png" alt=""/>
                    
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
           @include('partage.menuCategorie')
            <!-- Sidebar end=============================================== -->
            <div class="span9">
               
                <h4>Derniers Produits </h4>
                <ul class="thumbnails">
                    @foreach($listProduit as $produit)
                    <li class="span3">
                        <div class="thumbnail">
                            <a  href="{{url('product_detail/'.$produit->id)}}"><img src="upload/{{$produit->photo}}" alt=""/></a>
                            <div class="caption">
                                <h5>{{$produit->nom}}</h5>
                                

                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="{{route('cart.addItem',$produit->id)}}">Ajouter à <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{$produit->prix}}</a></h4>
                               
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