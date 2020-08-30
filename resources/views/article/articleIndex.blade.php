@extends("template.main")

<!--==========================
    Article Section
============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Article</h3>
          <p>Lorem ipsum dolor sit amet</p>
        </header>

        <div class="row">

        @foreach ($article as $key => $value)
          <div class="col-md-12 col-lg-12 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="{{ route('article.articleSingle',$value->id) }}"> {{ $value->title }} </a></h4>
              <p class="description"> {{ substr($value->body, 0, 200) }} {{ strlen($value->body) > 200 ? '....' : "" }} </p>
            </div>
          </div>
        @endforeach

        </div>

      </div>
    </section>
    <!-- #services -->
