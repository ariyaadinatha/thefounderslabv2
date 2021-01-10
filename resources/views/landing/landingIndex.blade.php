@extends("template.main")

@section('content')
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 h-100" src="{{ URL::asset('img/carousel1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 h-100" src="{{ URL::asset('img/carousel2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 h-100" src="{{ URL::asset('img/carousel3.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>


  <!--==========================
    Intro Section
  ============================-->


  <main id="main">


  <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>TFL TEAM FINDER</h3>
          <p>Find your Co-Workers through The Founders Laboratory Online Speed Dating</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-6 wow bounceInUp d-flex align-items-stretch" data-wow-duration="1.4s">
            <div class="box">
                <h4 class="title"><a href="oprec/hasil.pdf"> <h3> LOOKING FOR A TEAM? </h3> </a></h4>
                <p class="description text-center pt-3"> <h6> we will help those of you who are in need of <br> <i> members (Co-founder/teammates/member) to develop your startup </i> </h6> </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSepEcSBQ9bzvenwTs2hw4xlhRCXqW921kxQ4FWPL1WP_bq-qg/viewform" target="_blank">
                <button type="button" class="btn btn-primary">Click Here</button></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp d-flex align-items-stretch" data-wow-duration="1.4s">
            <div class="box">
                <h4 class="title"><a href="oprec/hasil.pdf"> <h3> LOOKING FOR A FOUNDER? </h3> </a></h4>
                <p class="description text-center pt-3"> <h6> we will help for those of you who are in need of<br> <i> a founder to come together to build a startup </i> </h6> </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfOAAVCzWPtbAmXAx_FY6jbRcjC-esc8SjbjIdaja75u8YkSg/viewform" target="_blank">
                <button type="button" class="btn btn-primary">Click Here</button></a>
            </div>
          </div>

        </div>

      </div>
    </section>


  <section id="services" class="m-3">
      <div class="container">
        <div class="row justify-content-center" id="oprec">
        
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"> <h2> GROWTH HACK </h2> </h4>
              <img class="card-img rounded" src="/img/event/hackgrowth/school.jpg" alt="Event image">
              <p class="description text-center pt-3"> <h6> hack your startup acceleration <i> through our program and mentors from a wide range of industries! </i> </h6> </p>
              <div class="d-flex justify-content-center">
                <a href="http://bit.ly/RegistrationsSSXFF" target="_blank">
                  <button type="button" class="btn btn-primary mr-2"> <b> Register </b> </button>
                </a>
                <a href="/event/growth-hack">
                  <button type="button" class="btn btn-info ml-2"> <b> Read More </b> </button></a>
                </a>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"> <h2> EVENT REGISTRATION </h2> </h4>
              <img class="card-img rounded" src="{{URL::asset($event->img)}}" alt="Event image">
              <p class="description text-center pt-3"> <h6> prepare yourself to initiate your startup <br> <i> with corporation-startup experts you won't want to miss! </i> </h6> </p>
              <div class="d-flex justify-content-center">
                <a href="{{$event->link}}" target="_blank">
                  <button type="button" class="btn btn-primary mr-2"> <b> Register </b> </button>
                </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About Us</h2>
              <h3> The Founders Laboratory is an organization founded by conscious individuals in this disruptive age. </h3>
              <p> The agile development of this technological era requires great innovation and inventions. We aim to embrace and create a start-up inclusive environment in ITB by providing the necessities and guidance towards proper development. </p>
              <p> Our renowned partners currently are: </p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Plug N’Play </li>
                <li><i class="ion-android-checkmark-circle"></i> The Greater Hub </li>
                <li><i class="ion-android-checkmark-circle"></i> Achmad Dzaky </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->




        <!--==========================
          Clients Section
        ============================-->
        <section id="clients" class="wow fadeInUp">
          <div class="container">

            <header class="section-header">
              <h3> Our Partners </h3>
            </header>

            <div class="owl-carousel clients-carousel">
              <img src="img/clients/client-1.png" alt="">
              <img src="img/clients/client-2.png" alt="">
              <img src="img/clients/client-3.png" alt="">
              <img src="img/clients/client-4.png" alt="">
              <img src="img/clients/client-5.png" alt="">
              <img src="img/clients/client-6.png" alt="">
              <img src="img/clients/client-7.png" alt="">
              <img src="img/clients/client-8.png" alt="">
            </div>

          </div>
        </section>




    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p> Join us and get exclusive access on valuable facilities we provide. </p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href=""> Research </a></h4>
              <p class="description">Research is based on MK3301, you must confirm that you will pick up the subject on your PRS to procceed developing the Research </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href=""> Co-Working Space </a></h4>
              <p class="description">Find and book our free co-working space partner around ITB to generate ide and generate innovation with your team </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href=""> Advisory & Mentorship </a></h4>
              <p class="description">Feel like your innovation and startup facing challenge and need several advise and mentor?</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href=""> Investment Capital & Funds </a></h4>
              <p class="description">You’re student looking for funding and need to find the right investors to pitch in front of your investor? </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">

        <header class="section-header">
          <h3>Why choose us?</h3>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="img/why-us.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>We aspire to create a platform for student start-ups in ITB to maximize their potential by connecting them to external partners, resources and facilities. </p>

              <p>  By maximizing the potential of each start-up and innovation, we aim to provide start-ups the chance to disrupt this agile era. For a greater Indonesia! </p>

              <p> We aspire to create a platform for student start-ups in ITB to maximize their potential by connecting them to external partners and with our rich resources and facilities. By maximizing the potential of each start-up and innovation, we aim to provide their start-ups the chance to disrupt this agile era. For a greater Indonesia!
                  We believe with collaboration, we will achieve effective and agile progress development. Thus, we establish partnerships with external partners and organizations.</p>

              <div class="features wow bounceInUp clearfix">
                <h4> Startup Development Camp </h4>
                <p> Prepare yourselves with our resources of mentors, trainings, sharing sessions, and more to face the incubator phase </p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <h4> Idealogy Bootcamp </h4>
                <p>Participate in a 30 day growth spurt to develop and maximize your start-ups potential</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <h4> Research Commercialization </h4>
                <p>Further develop and commercialize your innovation with our research</p>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="container">
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">21</span>
            <p>Webinars</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4</span>
            <p>Event</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4</span>
            <p>Services</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1164</span>
            <p>Community</p>
          </div>

        </div>

      </div>
    </section>


    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Idealogy Webinar & Workshop 2020</h4>
            <p>
               Idealogy Webinar consists of multiple webinar events covering a diverse amount of topics. Gain substantial insight and knowledge on various topics by participating on our webinars!
            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Idealogy Start Up Challenge 2020</h4>
            <p>
             The Start-up Challenge is an event where you will participate in a 30-day growth spurt program. Prepare and further develop the potential of your startup with our resources.
            </p>
            <p>
              With guidance from mentors, trainings, and sharing sessions. Get ready for the incubation phase with us!
            </p>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <div class="container-fluid padding">
    <div class="row text-center padding">
    	<div class="col-12" id="contact">
    		<h2> Connect </h2>
    	</div>
    	<div class="col-12 social padding">
    		<a href="https://www.linkedin.com/company/the-founders-laboratory/" target="_blank"><i class="fab fa-linkedin"> </i></a>
    		<a href="https://www.instagram.com/thefounderslab/" target="_blank"><i class="fab fa-instagram">  </i></a>
    	</div>
    </div>
    </div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  @endsection


@section('script')

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

@endsection