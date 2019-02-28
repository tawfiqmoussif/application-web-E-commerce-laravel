@extends('layouts.app')
@section('content')
<head><title>produit</title></head>
<body>
<div class="container">
	<dir class="row">
		<div class="col-md-12">
			<h1>La liste de mes produits</h1>
			<div class="pull-right">
				<a href="{{url('add_product')}}" class="btn btn-success">Nouveau produit</a>
			</div>
<ul class="thumbnails">
	@foreach($listProduit as $prod)
					<li class="span3">
						<div class="thumbnail">
							<a href="{{url('produit/'.$prod->id)}}"><img src="upload/{{$prod->photo}}" alt=""/></a>
							
							<div class="caption">
								<h5>{{$prod->nom}}</h5>
								<p>
									
								</p>
								<form action="{{url('product/'.$prod->id)}}" method="post">
									{{csrf_field()}}
									{{method_field('DELETE')}}

								<h4 style="text-align:center"><a class="btn btn-primary" href="{{url('produit/'.$prod->id)}}">Details</a>
								 <a class="btn btn-default" href="{{url('product/'.$prod->id.'/edit')}}">Editer</a> 
								 <button class="btn btn-danger" type="submit" >Supprimer</button></h4>
								</form>
							</div>
						</div>
					</li>
	@endforeach
</ul>
</div>
</dir>
</div>
</body>











@endsection