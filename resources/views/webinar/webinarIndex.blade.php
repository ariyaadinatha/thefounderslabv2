@extends("template.main")


    <!--==========================
      Webinar Section
    ============================-->
    
@section('content')
<div class="container-fluid">

<div class="jumbotron jumbotron-fluid" style="background-image : url({{ URL::asset('img/danau.jpg') }});">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>


</div>

    <section id="services" class="section-bg">
      <div class="container">



        <header class="section-header">
          <h3>Webinar</h3>
          <p> Gain substantial knowledge on various topics by participating on our webinars!</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href=""> Webinar 1 </a></h4>
              <p class="description"> Lorem ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href=""> Webinar 2 </a></h4>
              <p class="description"> Lorem ipsum dolor sit amet </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href=""> Webinar 3 </a></h4>
              <p class="description"> Lorem ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href=""> Webinar 4 </a></h4>
              <p class="description"> Lorem ipsum dolor sit amet </p>
            </div>
          </div>


        </div>

      </div>
    </section>

@endsection