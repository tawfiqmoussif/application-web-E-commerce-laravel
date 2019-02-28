    <div id="logoArea" class="navbar">
      <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-inner">
        <a class="brand" href="{{url('/')}}"><img src="{{url('themes/images/logo.png')}}" alt="Bootsshop" class="taw" /></a>
        <form class="form-inline navbar-search" action="{{url('search')}}" >
          <input name="searchData" class="srchTxt" type="text" placeholder="rechercher" />
          <select class="srchTxt" name="selectCategorie">
            <option value="Tous">Tous</option>
            
            
           
             
           
          </select>
          <button type="submit" id="submitButton" class="btn btn-primary">Aller</button>
        </form>
        <ul id="topMenu" class="nav pull-right">
          @guest
                            <li><a href="{{ route('login') }}">Authentification</a></li>
                            <li><a href="{{ route('register') }}"> <span class="btn btn-large btn-success">Inscription</span></a></li>
                        @else
                        <ul class="nav navbar-nav">
                          @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('fournisseur'))
                          <li><a href="{{ url('product') }}">Mes produits</a></li>
                           @endif
                          @if(Auth::user()->hasRole('admin'))
                          <li><a href="{{ url('add_categorie') }}">Ajouer des categories</a></li>
      <li><a href="{{ url('admin') }}">Admin</a></li>
      @endif
      <li class="dropdown">
         <li>                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Déconnection
                                        </a></li>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        
      </li>
      
      
    </ul>
                           
                        @endguest
          

          
        
        </ul>
      
    </div>

</div>
</body>