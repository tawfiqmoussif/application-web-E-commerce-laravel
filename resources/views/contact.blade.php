@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contacte</title>
</head>
  
<body>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Nous rendre visite</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>Contacte Détails</h4>
		<p>	20,wafae<br/> Rte Sefreou, FES
			<br/>Maroc<br/>
			t-creative@gmail.com<br/>
			﻿Tel 0661801175<br/>
			Fax 123-456-5679<br/>
			web:TCreative.ma
		</p>		
		</div>
			
		<div class="span4">
		<h4>Heures d'ouverture</h4>
			<h5> lundi - vendredi</h5>
			<p>09:00 - 18:00<br/><br/></p>
			<h5>Samedi</h5>
			<p>09:00 - 12:00<br/><br/></p>
			
		</div>
		<div class="span4">
		<h4>Email </h4>
		<form class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="nom" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="sujet" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" type="submit">Envoyer</button>

        </fieldset>
      </form>
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