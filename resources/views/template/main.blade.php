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
  @yield('style')
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
          <a class="nav-link" href="/webinar">Webinar</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Directory
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="#">Student Startup</a>
            <a class="dropdown-item" href="#">Incubator</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="#">Mentor</a>
            <a class="dropdown-item" href="#">Research</a>
            <a class="dropdown-item" href="#">Funding Frenzy</a>
            <a class="dropdown-item" href="#">Space</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Networking
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="#">Community College</a>
            <a class="dropdown-item" href="#">Looking for Co-Founder</a>
            <a class="dropdown-item" href="#">Looking for Startup Team</a>
            <a class="dropdown-item" href="#">Finding Intern/Freelance</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Medium
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="#">Articles</a>
            <a class="dropdown-item" href="#">Podcast</a>
            <a class="dropdown-item" href="#">Subscribe Newsletter</a>
            <a class="dropdown-item" href="#">Hall of Fame</a>
          </div>
        </li>

        <li class="nav-item pr-2">
          <a class="nav-link" href="#">Courses</a>
        </li>


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
		<img src="{{ URL::asset('img/apple-touch-icon.png') }}" height=100px>
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
<script>

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
        );
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
});

</script>

</html>