<html lang="en">
<head>
  <meta charset="utf-8">
  <title> The Founders Lab</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!-- Bootstrap CSS File {{ URL::asset('assets/css/bootstrap.min.css') }}-->
  <link href="{{ URL::asset('lib/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  @yield('css')
</head>

  <!--==========================
  Header
  ============================-->
<header id="header">

<div class="container-fluid">

  <div class="logo float-left">
    <a href="/landing" class="scrollto pl-5"><img src="{{ URL::asset('img/apple-touch-icon.png') }}" width="30" height="30" alt=""></a>
    <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> class="active" -->
  </div>

  <nav class="main-nav float-right d-none d-lg-block">
    <ul>
        <li class="nav-item">
          <a class="nav-link" href="/landing">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/event">Event</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Directory
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="/startup">Student Startup</a>
            <a class="dropdown-item" href="/incubator">Incubator</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="/mentor">Mentor</a>
            <a class="dropdown-item" href="/research">Research</a>
            <a class="dropdown-item" href="/fundingfrenzy">Funding Frenzy</a>
            <a class="dropdown-item" href="/space">Space</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Networking
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="/community">Community College</a>
            <a class="dropdown-item" href="/cofound">Looking for Co-Founder</a>
            <a class="dropdown-item" href="/team">Looking for Startup Team</a>
            <a class="dropdown-item" href="/intern">Finding Intern/Freelance</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Medium
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="/article">Articles</a>
            <a class="dropdown-item" href="/podcast">Podcast</a>
            <a class="dropdown-item" href="/subscribe">Subscribe Newsletter</a>
            <a class="dropdown-item" href="/hall">Hall of Fame</a>
          </div>
        </li>

        <li class="nav-item pr-2">
          <a class="nav-link" href="/course">Courses</a>
        </li>


    </ul>
  </nav><!-- .main-nav -->

</div>
</header><!-- #header -->


<body>
  @yield('content')
</body>


</html>