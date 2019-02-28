@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produit</title>
</head>
<body>
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
             @include('partage.menuCategorie')
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/{{$produit->nom}}</span></li>
                    <li class="active"></li>
                </ul>
                <h3> {{$produit->nom}} <small class="pull-right"> </small></h3>
                <hr class="soft"/>
                <p>
                    {{$produit->description}}
                </p>
                <hr class="soft"/>
                <h3> ${{$produit->prix}}</h3>

                
            </div>
        </div>
    </div>
</div>
<!-- MainBody End ============================= -->
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