@extends("template.main")

@section('content')

<div class="conteiner">

<section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Admin Dashboard</h3>
          <p> What do you want to do today ? </p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"><a href="/event/create"> Create Event </a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"><a href="#"> Add Student Startup  </a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"><a href="#"> Add Mentor  </a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"><a href="#"> Add Network </a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"><a href="/medium/create"> Create Medium </a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <h4 class="title"><a href="#"> Add Course </a></h4>
            </div>
          </div>


        </div>

      </div>
    </section>
</div>
@endsection