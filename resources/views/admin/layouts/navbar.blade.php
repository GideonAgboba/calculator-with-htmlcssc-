<nav class="navbar wow fadeInUp navbar-expand-md text-white navbar-dark fixed-top home_navbar" id="mainNav">
    <a class="navbar-brand" href="{{url('/home')}}"><img src="logo.png" style="height: 30px;width:150px;"></a>
    <!-- <a class="navbar-brand" href="{{url('/home')}}">Sparkle</a> -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
            
      
      <ul class="navbar-nav ml-auto" style="z-index: 10000 !important;">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/home')}}">Back to website</a>
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

          @if(Auth::user()->is_active == 0)
          <li class="nav-item dropdown mt-2 hide">
            <span class="alert alert-warning nav-item">
              <small>Welcome admin user <i class="fa fa-times-circle"></i></small>
            </span>
          </li>
          @else
          <li class="nav-item dropdown mt-2 hide">
            <span class="alert alert-success nav-item">
              <small>Welcome admin user <i class="fa fa-check-circle"></i></small>
            </span>
          </li>
          @endif
      </ul>




      <ul class="navbar-nav bg-white text-dark navbar-sidenav card" id="exampleAccordion" style="height:100vh;color: #000;z-index: 0 !important;overflow-y: auto;">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('adminpage') }}">
                    <i class="fa fa-fw fa-tachometer-alt text-dark"></i>
                    <span class="nav-link-text text-dark">Dashboard</span>
                </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench text-dark"></i>
                    <span class="nav-link-text text-dark">Profiles</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="{{ url('adminprofilesadmin') }}"><i class="fa fa-fw fa-user"></i> Admin User</a>
                    </li>
                    <li>
                    <a href="{{ url('adminprofilesguest') }}"><i class="fa fa-fw fa-user-circle"></i> Guest Users</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench text-dark"></i>
                    <span class="nav-link-text text-dark text-dark">Products</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#emulsionint_collapse" data-parent="#exampleAccordion">
                            <span class="nav-link-text">Emulsion Interior</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="emulsionint_collapse">
                            <li>
                                <a href="{{ url('emlintcreate') }}"><i class="fa fa-fw fa-edit"></i> Create Product</a>
                            </li>
                            <li>
                            <a href="{{ url('emlintedit') }}"><i class="fa fa-fw fa-cog"></i> Edit Products</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#emulsionext_collapse" data-parent="#exampleAccordion">
                            <span class="nav-link-text">Emulsion Exterior</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="emulsionext_collapse">
                            <li>
                                <a href="{{ url('emlextcreate') }}"><i class="fa fa-fw fa-edit"></i> Create Product</a>
                            </li>
                            <li>
                            <a href="{{ url('emlextedit') }}"><i class="fa fa-fw fa-cog"></i> Edit Products</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#texcoteint_collapse" data-parent="#exampleAccordion">
                            <span class="nav-link-text">Texcote Interior</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="texcoteint_collapse">
                            <li>
                                <a href="{{ url('texintcreate') }}"><i class="fa fa-fw fa-edit"></i> Create Product</a>
                            </li>
                            <li>
                            <a href="{{ url('texintedit') }}"><i class="fa fa-fw fa-cog"></i> Edit Products</a>
                            </li>
                        </ul>
                    <li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#texcoteext_collapse" data-parent="#exampleAccordion">
                            <span class="nav-link-text">Texcote Exterior</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="texcoteext_collapse">
                            <li>
                                <a href="{{ url('texextcreate') }}"><i class="fa fa-fw fa-edit"></i> Create Product</a>
                            </li>
                            <li>
                            <a href="{{ url('texextedit') }}"><i class="fa fa-fw fa-cog"></i> Edit Products</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#gloss" data-parent="#exampleAccordion">
                            <span class="nav-link-text">Gloss</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="gloss">
                            <li>
                                <a href="{{ url('glosscreate') }}"><i class="fa fa-fw fa-edit"></i> Create Product</a>
                            </li>
                            <li>
                            <a href="{{ url('glossedit') }}"><i class="fa fa-fw fa-cog"></i> Edit Products</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" data-toggle="modal" data-target="#sendmail">
                <i class="fa fa-fw fa-envelope text-dark"></i>
                    <span class="nav-link-text text-dark">Send mail</span>
                </a>
                </li>
            </ul>
    </div>
  </nav>


@extends('admin.layouts.modals')
  