<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
			<div class="span6"><a href="{{url('contact')}}"><span class="btn btn-mini btn-primary"> NOUS CONTACTER </span> </a>
</div>
			<div class="span6">
				<div class="pull-right">


					<span class="btn btn-mini">$155.00</span>
					<a href="{{url('product_summary')}}"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Objets dans votre panier </span> </a>
				</div>
			</div>
		</div>
	</div>
		<!-- Navbar ================================================== -->
		<div id="logoArea" class="navbar">
			<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-inner">
				<a class="brand" href="{{url('accueil')}}"><img src="themes/images/logo.png" alt="Bootsshop" class="taw" /></a>
				<form class="form-inline navbar-search" method="post" action="products.html" >
					<input id="srchFld" class="srchTxt" type="text" placeholder="rechercher" />
					<select class="srchTxt" name="selectCategorie">
						<option value="Tous">Tous</option>
						@foreach($listCateg as $Cat)
                        <option value="{{$Cat->nom}}">{{$Cat->nom}}</option>
                        @endforeach
					</select>
					<button type="submit" id="submitButton" class="btn btn-primary">Aller</button>
				</form>
				<ul id="topMenu" class="nav pull-right">
					<li class=""><a href="{{url('espace_client_auth')}}">Espace Client</a></li>
					<li class=""><a href="{{url('espace_fournisseur')}}">Espace Fournisseur</a></li>
					<li class=""><a href="{{url('special_offer')}}">Offre Speciale </a></li>
					<a href="{{url('register')}}"> <span class="btn btn-large btn-success">Inscription</span></a>

					<li class="">
						<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3>Bloc de Connexion</h3>
							</div>
							<div class="modal-body">
								<form class="form-horizontal loginFrm">
									<div class="control-group">
										<input type="text" id="inputEmail" placeholder="Email">
									</div>
									<div class="control-group">
										<input type="password" id="inputPassword" placeholder="Password">
									</div>
									<div class="control-group">
										<label class="checkbox">
											<input type="checkbox"> Souviens de moi
										</label>
									</div>
								</form>
								<button type="submit" class="btn btn-success">Se Connecter</button>
								<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

</div>
</body>

@yield('content')



<body>
  <div  id="footerSection">
	  <div class="container">
		  <div class="row">
			  <div class="span3">
				  <h5>COMPTE</h5>
				  <a href="login.html">votre compte</a>
				  <a href="login.html">Informations Personnelles</a>
			  </div>
			  <div class="span3">
				  <h5>INFORMATION</h5>
				  <a href="contact">Contact</a>
				  <a href="register.html">Inscription</a>
				  <a href="legal_notice.html">Avis Juridique</a>
				  <a href="tac.html">Termes & Conditions</a>
				  <a href="faq.html">FAQ</a>
			  </div>
			  <div class="span3">
				  <h5>NOS OFFRES</h5>
				  <a href="#">Nouveaux Produits</a>
				  <a href="#">Top Ventes</a>
				  <a href="special_offer.html">Spéciale Offres</a>
				  <a href="#">Fabricants</a>
				  <a href="#">Fournisseurs</a>
			  </div>
			  <div id="socialMedia" class="span3 pull-right">
				  <h5>Médias Sociaux </h5>
				  <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				  <a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				  <a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			  </div>
		  </div>
		  
	  </div><!-- Container End -->
  </div>

</div>
</body>
</html>