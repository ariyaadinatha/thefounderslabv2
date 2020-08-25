<html lang="en">
<head>
  <meta charset="utf-8">
  <title> The Founders Lab</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  @yield('style')
</head>

  <!--==========================
  Header

  ============================-->
<header id="header">

<div class="container">

  <div class="logo float-left">
    <a href="#intro" class="scrollto"><img src="/img/apple-touch-icon.png" width="30" height="30" alt=""></a>
    <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
  </div>

  <nav class="main-nav float-right d-none d-lg-block">
    <ul>
      <li class="active"><a href="/landing">Home</a></li>
      <li><a href="/webinar">Webinar</a></li>
      <li><a href="/news">News</a></li>
      <li><a href="/registrasi">Registrasi</a></li>
    </ul>
  </nav><!-- .main-nav -->

</div>
</header><!-- #header -->

<body>
  @yield('content')
</body>

<footer>
<div class="container-fluid padding content">
<div class="row text-center">
	<div class="col-md-4">
		<img src="img/apple-touch-icon.png" height=100px>
		<hr class="light">
		<p> thefounderslab@gmail.com </p>
		<p> Jalan Ganesha No. 10 </p>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5> Services </h5>
		<hr class="light">
		<p> Advisory & Mentorship </p>
		<p> Research </p>
		<p> Co-Working Spaces </p>
		<p> Investment Capital & Funds </p>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5> Contact Person </h5>
		<hr class="light">
		<p> Grace Natasha Christiadhi </p>
		<p> 082138099916 </p>
	</div>
</div>
</div>
</footer>

@yield('script')

</html>