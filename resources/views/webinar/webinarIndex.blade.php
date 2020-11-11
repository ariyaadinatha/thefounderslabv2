@extends("template.main")


    <!--==========================
      Webinar Section
    ============================-->
    
@section('content')
<div class="container-fluid">

<div class="jumbotron jumbotron-fluid text-center" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.9) 0%,rgba(0,0,0,0.9) 100%), url({{ URL::asset('img/webinar.jpg') }});">

      <h1 class="display-4 pt-5">Webinar</h1>
      <p class="lead"> Gain substantial knowledge on various topics by participating on our webinars! </p>
 
</div>


</div>

<div class="container pt-3 pb-3">
    <div class="row">
        
        <!-- loop dari sini -->
 
        <div class="col-sm-6">
          <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
            <img class="card-img rounded" src="{{ URL::asset('img/webinar/webinar1.jpg') }}" alt="Card image" style="height:30vw;">
             <!-- <h5 class="card-title pt-2">Special title treatment</h5>-->
              <p class="card-text"> </p> 
              <a href="https://bit.ly/3eQ2Q6P" target="_blank" class="btn btn-primary">Register</a>
            </div>
            <div class="card-footer text-muted">
              
            </div>
          </div>
        </div>



        <!-- sampai sini -->






        

    </div>
</div>


@endsection