@extends("template.section")


@section('jumbotronImage', 'img/network.jpg')
@section('title', 'TFL Team Finder')

@section('subtitle', 'Find your Co-Workers through The Founders Laboratory Online Speed Dating')


@section('content')

<section id="services" class="section-bg">
      <div class="container">
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

@endsection