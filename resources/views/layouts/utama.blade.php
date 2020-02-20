<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" media="(max-width: 600px)" href="example.css" />

  <title>GKJ SAMIRANOBARU @yield('title')</title>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset ('utama/css/owl.carousel.css') }}" />
		<link type="text/css" rel="stylesheet" href="{{asset ('utama/css/owl.theme.default.css') }}" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset ('utama/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset ('utama/css/style.css')}}"/>



  <!-- Bootstrap core CSS -->
  <link href="{{asset ('utama/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset ('utama/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset ('utama/css/agency.min.css')}}" rel="stylesheet">

  <!--FontAwesome Icon-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      
<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('utama/img/gkjLogo.png') }}"width="50px" height="auto"> GKJ Samironobaru</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto" id="menu">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#ibadah">Ibadah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/utama/2">Warta Gereja</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="utama/kegiatan">Gallery</a>
          </li>


          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link js-scroll-trigger" data-toggle="dropdown">Profil <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="divider folder"></li>
              <li><a href="/uprofil" class="subnav">Profil Gereja</a></li>
              <li class="divider folder"></li>
              <li><a href="/utama/pendeta" class="subnav">Pendeta</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
        @yield('header')
    </div>
  </header>

    <!--Body-->
    @yield('content')


  

  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
         
        </div>
        <div class="col-md-12"><br/>
          <span class="copyright">Copyright &copy; GKJ Samirono Baru 2019</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset ('utama/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset ('utama/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset ('utama/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{asset ('utama/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset ('utama/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset ('utama/js/agency.min.js')}}"></script>

  <script src="{{asset ('utama/js/jquery2.min.js')}}"></script>
  <script src="{{asset ('utama/js/bootstrap2.min.js')}}"></script>
  <script src="{{asset ('utama/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset ('utama/js/main.js')}}"></script>
  
</body>

</html>
