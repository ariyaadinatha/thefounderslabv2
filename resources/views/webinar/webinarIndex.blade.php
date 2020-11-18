@extends("template.section")

@section('picture', 'img/webinar.jpg')
@section('title', 'Webinar')

@section('subtitle', 'Gain substantial knowledge on various topics by participating on our webinars!')


@section('content')
<div class="container pt-3 pb-3">
    <div class="row">
        
        <!-- loop dari sini -->
 
        <div class="col-sm-6">
          <div class="card text-center">
            <div class="card-header">
              <b> Featured </b>
            </div>
            <a href="https://bit.ly/3eQ2Q6P" target="_blank" class="btn btn-primary">
              <div class="card-body">
              <img class="card-img rounded" src="{{ URL::asset('img/webinar/webinar2.jpg') }}" alt="Card image">
              </div>
            </a>
          </div>
        </div>



        <!-- sampai sini -->

        <!-- loop dari sini -->
 
        <div class="col-sm-6">
          <div class="card text-center">
    
            <div class="card-body">
            <img class="card-img rounded" src="{{ URL::asset('img/webinar/webinar1.jpg') }}" alt="Card image">
            </div>
          </div>
        </div>



        <!-- sampai sini -->

    </div>
</div>


@endsection
