<nav class="navbar wow fadeInUp nav-change navbar-expand-md text-white navbar-dark fixed-top home_navbar" id="mainNav">
    <a class="navbar-brand" href="{{url('/home')}}">Sparkle</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/home')}}">Home</a>
        </li>
        @if(Auth::user()->role_id == 1)
        <li class="nav-item">
          <a class="ml-0 nav-link" href="{{url('/adminpage')}}">Visit admin page</a>
        </li>
        @endif
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Store<span class="d-lg-none"></span>
            </a>
            <div class="dropdown-menu text-center" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">Store items:</h6>
              <div class="dropdown-divider"></div>
                <a href="{{ url('/storeemulsionemulsion_ext') }}" class="btn-light nav-link text-dark">Emulsion</a>
                <a href="{{ url('/storetexcotetexcote_ext') }}" class="btn-light nav-link text-dark">Texcote</a>
                <a href="{{ url('/storegloss') }}" class="btn-light nav-link text-dark">Gloss</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item small" href="#"></a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-lg mt-2 fa-shopping-cart"></i>
              <div class="bg-danger text-white hide rounded-circle cart_count">
                {{App\Cart::where('user_id', Auth::user()->id)->count()}}
              </div>
            <span class="d-lg-none">Cart
              <span class="badge badge-danger">{{App\Cart::where('user_id', Auth::user()->id)->count()}} New</span>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Cart items:</h6>
            <div class="dropdown-divider"></div>
              @if(App\Cart::where('user_id', Auth::user()->id)->count() > 0)
              <?php $cartitems = App\Cart::where('user_id', Auth::user()->id)->get() ?>
                <div class="bg-light card pt-1 pb-1">
                  @foreach($cartitems as $cartitem)
                    <div class="row mb-1 ml-1">
                      <div class="col-lg-2">
                        <img src="assets/images/products/{{$cartitem->path}}" class="img-responsive" width='20' height='20' alt="">
                      </div>
                      <div class="col-lg-9">
                        <div class="row">
                          <small class="nav-link text-dark" style="margin-top: -5px;">{{$cartitem->title}}  x{{$cartitem->quantity}}</small>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              @else
                  <p class="text-center nav-link text-danger">Empty Cart</p>
              @endif
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="{{url('/basket')}}">Go to basket <i class="fa fa-angle-right"></i></a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="uploads/{{Auth::user()->path}}" class="home_user_profile">
          </a>
          <div class="dropdown-menu text-center" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">{{Auth::user()->name}}:</h6>
            <div class="dropdown-divider"></div>
              <a href="{{ url('/profile') }}" class="nav-link bg-light text-dark">Profile</a>
              <a href="{{ url('/logout') }}" class="nav-link bg-light text-dark">Logout</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#"></a>
          </div>
        </li>

        @if(Auth::user()->role_id == 1)
          @if(Auth::user()->is_active == 0)
          <li class="nav-item dropdown mt-2 hide">
            <span class="alert alert-warning nav-item">
              <small>Welcome admin user (Unverified) <i class="fa fa-times-circle"></i></small>
            </span>
          </li>
          @else
          <li class="nav-item dropdown mt-2 hide">
            <span class="alert alert-success nav-item">
              <small>Welcome admin user (Verified) <i class="fa fa-check-circle"></i></small>
            </span>
          </li>
          @endif
        @else
          @if(Auth::user()->is_active == 0)
          <li class="nav-item dropdown mt-2 hide">
            <span class="alert alert-danger nav-item">
              <small>Unverified <i class="fa fa-times-circle"></i></small>
            </span>
          </li>
          @else
          <li class="nav-item dropdown mt-2 hide">
            <span class="alert alert-success nav-item">
              <small>Verified <i class="fa fa-check-circle"></i></small>
            </span>
          </li>
          @endif
        @endif
        
        <!-- <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="assets/images/{{Auth::user()->path}}" class="home_user_profile">
              <span class="input-group-append">
                <a class="nav-link dropdown-toggle text-white form-inline my-2 my-lg-0 mr-lg-2" ></a>
                <div class="dropdown-menu text-center" aria-labelledby="alertsDropdown">
                    <a href="{{ url('/logout') }}" class="btn text-dark"><i class="fa fa-btn fa-user-circle"></i>Profile</a>
                    <a href="{{ url('/logout') }}" class="btn text-dark"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                </div>
              </span>
            </div>
          </form>
        </li> -->
      </ul>
    </div>
  </nav>