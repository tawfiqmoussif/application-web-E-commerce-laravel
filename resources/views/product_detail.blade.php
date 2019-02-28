@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


   <title>detail produit</title>
  
        


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
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li><a href="products.html">Produit</a> <span class="divider">/</span></li>
                    <li class="active">produit Details</li>
                </ul>
                <div class="row">
                    <div id="gallery" class="span3">
                        <a href="#" title="pro">
                            <img src="{{url('upload/'.$produit->photo)}}" style="width:100%"/>
                        </a>
                        <div id="differentview" class="moreOptopm carousel slide">
                            <div class="carousel-inner">
                                
                            </div>
                            <!--
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                            -->
                        </div>

                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <span class="btn"><i class="icon-envelope"></i></span>
                                <span class="btn" ><i class="icon-print"></i></span>
                                <span class="btn" ><i class="icon-zoom-in"></i></span>
                                <span class="btn" ><i class="icon-star"></i></span>
                                <span class="btn" ><i class=" icon-thumbs-up"></i></span>
                                <span class="btn" ><i class="icon-thumbs-down"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <h3>{{$produit->nom}} </h3>
                        
                        <hr class="soft"/>
                        <form class="form-horizontal qtyFrm">
                            <div class="control-group">
                                <label class="control-label"><span>{{$produit->prix}}</span></label>
                                <div class="controls">
                                    
                                    <a type="submit" class="btn btn-large btn-primary pull-right" href="{{route('cart.addItem',$produit->id)}}" > Ajouter au panier <i class=" icon-shopping-cart"></i></a>
                                </div>
                            </div>
                        </form>

                        <hr class="soft"/>
                        <h4>{{$produit->nombre}} objets en stock</h4>
                        <form class="form-horizontal qtyFrm pull-right">
                            
                             <hr class="soft clr"/>
                        <p>
                            {{$produit->description}}

                        </p>

                         </div>
                        </form>
                        
                        
                        <div class="comments">

                            
                        </div>
                       
  

                        
                   

                    <div class="span9">
                        <ul id="productDetail" class="nav nav-tabs">
                            
                            <li><button class="btn btn-danger"> <a href="#detail" data-toggle="tab">Autres produits</a></button></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            
                            <div class="tab-pane fade" id="detail">
                                <div id="myTab" class="pull-right">
                                    <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                                    <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
                                </div>
                                <br class="clr"/>
                                <hr class="soft"/>
                                <div class="tab-content">
                                    <div class="tab-pane" id="listView">
                                        <div class="row">
                                            <div class="span2">
                                                <img src="themes/images/products/4.jpg" alt=""/>
                                            </div>
                                            <div class="span4">
                                                <h3>New | Available</h3>
                                                <hr class="soft"/>
                                                <h5>Product Name </h5>
                                                <p>
                                                    Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                                    that is why our goods are so popular..
                                                </p>
                                                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                                <br class="clr"/>
                                            </div>
                                            <div class="span3 alignR">
                                                <form class="form-horizontal qtyFrm">
                                                    <h3> $222.00</h3>
                                                    <label class="checkbox">
                                                        <input type="checkbox">  Adds product to compair
                                                    </label><br/>
                                                    <div class="btn-group">
                                                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <hr class="soft"/>
                                        <div class="row">
                                            <div class="span2">
                                                <img src="themes/images/products/5.jpg" alt=""/>
                                            </div>
                                            <div class="span4">
                                                <h3>New | Available</h3>
                                                <hr class="soft"/>
                                                <h5>Product Name </h5>
                                                <p>
                                                    Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                                    that is why our goods are so popular..
                                                </p>
                                                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                                <br class="clr"/>
                                            </div>
                                            <div class="span3 alignR">
                                                <form class="form-horizontal qtyFrm">
                                                    <h3> $222.00</h3>
                                                    <label class="checkbox">
                                                        <input type="checkbox">  Adds product to compair
                                                    </label><br/>
                                                    <div class="btn-group">
                                                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <hr class="soft"/>
                                        <div class="row">
                                            <div class="span2">
                                                <img src="themes/images/products/6.jpg" alt=""/>
                                            </div>
                                            <div class="span4">
                                                <h3>New | Available</h3>
                                                <hr class="soft"/>
                                                <h5>Product Name </h5>
                                                <p>
                                                    Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                                    that is why our goods are so popular..
                                                </p>
                                                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                                <br class="clr"/>
                                            </div>
                                            <div class="span3 alignR">
                                                <form class="form-horizontal qtyFrm">
                                                    <h3> $222.00</h3>
                                                    <label class="checkbox">
                                                        <input type="checkbox">  Adds product to compair
                                                    </label><br/>
                                                    <div class="btn-group">
                                                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <hr class="soft"/>
                                        <div class="row">
                                            <div class="span2">
                                                <img src="themes/images/products/7.jpg" alt=""/>
                                            </div>
                                            <div class="span4">
                                                <h3>New | Available</h3>
                                                <hr class="soft"/>
                                                <h5>Product Name </h5>
                                                <p>
                                                    Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                                    that is why our goods are so popular..
                                                </p>
                                                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                                <br class="clr"/>
                                            </div>
                                            <div class="span3 alignR">
                                                <form class="form-horizontal qtyFrm">
                                                    <h3> $222.00</h3>
                                                    <label class="checkbox">
                                                        <input type="checkbox">  Adds product to compair
                                                    </label><br/>
                                                    <div class="btn-group">
                                                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <hr class="soft"/>
                                        <div class="row">
                                            <div class="span2">
                                                <img src="themes/images/products/8.jpg" alt=""/>
                                            </div>
                                            <div class="span4">
                                                <h3>New | Available</h3>
                                                <hr class="soft"/>
                                                <h5>Product Name </h5>
                                                <p>
                                                    Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                                    that is why our goods are so popular..
                                                </p>
                                                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                                <br class="clr"/>
                                            </div>
                                            <div class="span3 alignR">
                                                <form class="form-horizontal qtyFrm">
                                                    <h3> $222.00</h3>
                                                    <label class="checkbox">
                                                        <input type="checkbox">  Adds product to compair
                                                    </label><br/>
                                                    <div class="btn-group">
                                                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <hr class="soft"/>
                                        <div class="row">
                                            <div class="span2">
                                                <img src="themes/images/products/9.jpg" alt=""/>
                                            </div>
                                            <div class="span4">
                                                <h3>New | Available</h3>
                                                <hr class="soft"/>
                                                <h5>Product Name </h5>
                                                <p>
                                                    Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                                    that is why our goods are so popular..
                                                </p>
                                                <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                                <br class="clr"/>
                                            </div>
                                            <div class="span3 alignR">
                                                <form class="form-horizontal qtyFrm">
                                                    <h3> $222.00</h3>
                                                    <label class="checkbox">
                                                        <input type="checkbox">  Adds product to compair
                                                    </label><br/>
                                                    <div class="btn-group">
                                                        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <hr class="soft"/>
                                    </div>
                                    <div class="tab-pane active" id="blockView">
                                        <ul class="thumbnails">
                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
                                                    <div class="caption">
                                                        <h5>Manicure &amp; Pedicure</h5>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text.
                                                        </p>
                                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
                                                    <div class="caption">
                                                        <h5>Manicure &amp; Pedicure</h5>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text.
                                                        </p>
                                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <a href="product_details.html"><img src="themes/images/products/12.jpg" alt=""/></a>
                                                    <div class="caption">
                                                        <h5>Manicure &amp; Pedicure</h5>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text.
                                                        </p>
                                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <a href="product_details.html"><img src="themes/images/products/13.jpg" alt=""/></a>
                                                    <div class="caption">
                                                        <h5>Manicure &amp; Pedicure</h5>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text.
                                                        </p>
                                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""/></a>
                                                    <div class="caption">
                                                        <h5>Manicure &amp; Pedicure</h5>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text.
                                                        </p>
                                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="thumbnail">
                                                    <a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""/></a>
                                                    <div class="caption">
                                                        <h5>Manicure &amp; Pedicure</h5>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text.
                                                        </p>
                                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <hr class="soft"/>
                                    </div>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ===================<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a>
                <a href="login.html">ADDRESSES</a>
                <a href="login.html">DISCOUNT</a>
                <a href="login.html">ORDER HISTORY</a>
            </div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>
                <a href="register.html">REGISTRATION</a>
                <a href="legal_notice.html">LEGAL NOTICE</a>
                <a href="tac.html">TERMS AND CONDITIONS</a>
                <a href="faq.html">FAQ</a>
            </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a>
                <a href="#">TOP SELLERS</a>
                <a href="special_offer.html">SPECIAL OFFERS</a>
                <a href="#">MANUFACTURERS</a>
                <a href="#">SUPPLIERS</a>
            </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
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