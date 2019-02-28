@extends('layouts.app')

@section('content')
<head><title>Home</title></head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
 
<div class="jumbotron">
    <img style="width:100%" src="themes/images/bienvenue.jpg" alt="special offers"/>
  <h1 class="display-4"><br></h1>
  
                
          
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="display-4">Vous êtes authentifié!</h1>
                <p class="lead">bienvenue sur votre compte </p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="{{url('/')}}" role="button">Accueil</a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
