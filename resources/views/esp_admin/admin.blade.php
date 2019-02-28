@extends('layouts.app')
@section('content')

<!------ Include the above in your HEAD tag ---------->
<head>
	<title>admin
	</title>
</head>
<body>
  <img style="width:100%" src="themes/images/admin.jpg" alt="special offers"/>
  
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Client</th>
      <th scope="col">Fournisseur</th>
      <th scope="col">Admin</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <form method="post" action="/add_role">
      {{csrf_field()}}
      <input type="hidden" name="email" value="{{$user->email}}">
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      
          
          
        
        
      <td><div class="form-check disabled"><input class="form-check-input" type="radio" name="role_client" onChange="this.form.submit()" disabled {{ $user->hasRole('client') ? 'checked' : ''}} ></div></td>
      <td><div class="form-check disabled"><input class="form-check-input" type="radio" name="role_fournisseur" onChange="this.form.submit()" disabled {{ $user->hasRole('fournisseur') ? 'checked' : ''}}></div></td>
    
      <td><input type="checkbox" name="role_admin" onChange="this.form.submit()" {{ $user->hasRole('admin') ? 'checked' : ''}}></td>
       
    </tr>
    </form>
    @endforeach
  </tbody>
</table>
</body>


@endsection