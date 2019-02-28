@extends('layouts.app')
@section('content')

<head> 
    <title>Bilan</title>
</head>
<body>
<div id="mainBody">
    <div class="container">
        <div class="row">
        	<!-- Sidebar ================================================== -->
            @include('partage.menuCategorie')
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">Accueil</a> <span class="divider">/</span></li>
                    <li class="active"> PANIER D'ACHAT</li>
                </ul>
        <h3>  PANIER D'ACHAT [ <small>{{Cart::count()}} Objet(s) </small>]<a href="{{url('/')}}" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continuer vos achats </a></h3>
                <hr class="soft"/>

<table class="table table-bordered">
                    <thead>
                    <tr>
                         <th>Nom</th>
                         <th>Prix</th>
                         <th>Quantité</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    
                    	@foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td >
                        
                       <div class="input-append">
                         {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input class="span1" type="number" min="0"  style="max-width:34px" placeholder="1" name="qty" size="16"  value="{{$cartItem->qty}}">
                        <input type="submit" class="btn btn-sm btn-primary" value="Appliquer" >
                        
                        {!! Form::close() !!}
                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           
                           <button class="btn btn-danger" type="submit"><i class="icon-remove icon-white"></i> Supprimer</button>
                         </form>
                         </div>


                    </td>
                       
                 </tr>
                    @endforeach
                     <tr>
                        <td colspan="2" style="text-align:right">les objets : </td>
                        <td>{{Cart::count()}} </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:right">IMPÔT : </td>
                        <td>$ {{Cart::tax()}} </td>
                    </tr> 
                    <tr>
                        <td colspan="2" style="text-align:right">Sous totale : </td>
                        <td>$ {{Cart::subtotal()}} </td>
                    </tr> 
                    <tr>
                        <td colspan="2" style="text-align:right"><strong>Totale : </strong></td>
                        <td class="label label-important" style="display:block"> <strong> $ {{Cart::total()}} </strong></td>
                    </tr>

                    
        
            	
            </tbody>
        </table>
        <a href="{{url('/')}}" class="btn btn-large"><i class="icon-arrow-left"></i> Continuer vos achats</a>
<div class="pull-right">
            <form action="" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button "
    data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
    data-amount=""
    data-name="Ecommerce"
    data-description=""
    data-image="{{url('themes\images\ico\apple-touch-icon-57-precomposed.png')}}"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form>

                

            

       
    </div>
    
</div>
</div>
</div>
</body>

    



@endsection