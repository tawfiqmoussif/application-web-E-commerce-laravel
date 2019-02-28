 <div id="sidebar" class="span3">
                <div class="well well-small"><a id="myCart" href="{{route('cart.index')}}"><img src="{{url('themes/images/ico-cart.png')}}" alt="cart">{{Cart::count()}} objets dans votre panier  <span class="badge badge-warning pull-right">$ {{Cart::total()}}</span></a></div>
                <ul id="sideManu" class="nav nav-tabs nav-stacked">
                     @foreach($listCateg as $cat)
                        
                    
                
                       
                    </li>
                    <li><a>{{$cat->nom}}</a></li>
                    
                    @endforeach
                </ul>
                <br/>
               
                <div class="thumbnail">
                    <img src="{{url('themes/images/payment_methods.png')}}" title="Bootshop Payment Methods" alt="Payments Methods">
                    <div class="caption">
                        <h5>méthodes de payement</h5>
                    </div>
                </div>
            </div>