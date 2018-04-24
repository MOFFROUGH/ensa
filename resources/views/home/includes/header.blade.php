<!-- preloader -->
<div id="preloader">
  <img src="{{asset('assets/img/preloader.gif')}}" alt="Preloader">
</div>
<!-- end preloader -->

<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-fixed-top navbar">
  <div class="container">
    <div class="navbar-header">
      <!-- responsive nav button -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars fa-2x"></i>
      </button>
      <!-- /responsive nav button -->

      <!-- logo -->
      <a class="navbar-brand" href="#body">
        <h1 id="logo">
          {{-- <img src="{{asset('assets/img/logo.png')}}" alt="eNSA"> --}}
          eNSA
        </h1>
      </a>
      <!-- /logo -->
    </div>

    <!-- main nav -->
    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <ul id="nav" class="nav navbar-nav">
        <li>
          <a href="#about">About</a>
        </li>
        <li>
          <a href="{{route('login')}}" id="login">Login</a>
        </li>
        <li>
          <a href="{{route('register')}}" id="register">Register</a>
        </li>
      </ul>
    </nav>
    <!-- /main nav -->

  </div>
</header>
<!--
End Fixed Navigation
==================================== -->
