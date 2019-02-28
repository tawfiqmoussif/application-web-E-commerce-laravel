@extends('layouts.app')
@section('content')

<div class="container">
  <dir class="row">
    <div class="col-md-12 text-center">
      <h2>cette page est non autoriser</h2>
      <a class="btn btn-danger" href="{{url('product')}}">Retour</a>

    </div>
   </dir>
  </div>

@endsection