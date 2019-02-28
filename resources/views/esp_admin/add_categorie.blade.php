@extends('layouts.app')
@section('content')

<!------ Include the above in your HEAD tag ---------->
<head>
	<title>add categorie
	</title>
</head>
<form class="form-horizontal" action="add_categorie" method="post">
  {{csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend>Ajouter des catégories</legend>

<div class="span12" >
<!-- Text input-->
<div class="form-group">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nom de catégorie :</b>
  <br>  
  <br>

  <div class="col-md-4" align="center">
  <input id="product_name" name="nomDeCategorie" placeholder="Nom de catégorie" class="taw2" required="" type="text">
<br>
<br>
<br>
  <br>
<!-- Button -->
<div class="form-group">
 
  <div class="col-md-4" align="center">
    <button id="singlebutton" name="ajouter" class="btn btn-primary">Ajouter la catégorie</button>
  </div>
  </div>
</div>
</fieldset>
</form>

@endsection