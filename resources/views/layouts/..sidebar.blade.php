<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/style.css">

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
			<div class="p-4 pt-5">
	  		<h1><a href="index.html" class="logo">Penduduk</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data Warga</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="{{ route('warga') }}">RT</a>
            </li>
            <li>
                <a href="#">RW</a>
            </li>
            </ul>
          </li>
          <li>
              <a href="#">Tentang Kami</a>
          </li>
          <ul></ul>
          
          	
          <!-- Authentication Links -->
          @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" style="color: #866ec7;">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
        </ul>

        <div class="mb-6">
					<!-- <h3 class="h6">Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form"> -->
            <div class="form-group d-flex">
            	<!-- <div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address"> -->
            </div>
          </form>
				</div>

        <div class="footer">
        	<!-- <!-- <p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<i class="icon-heart" aria-hidden="true"></i> by CV Natusi
					   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>-->
        </div>

      </div>
	</nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">

        @yield('content2')
        
    </div>
    
	</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstraps.min.js"></script>
<script src="assets/js/mains.js"></script>
