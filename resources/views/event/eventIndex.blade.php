@extends("template.section")


@section('jumbotronImage', 'img/webinar.jpg')
@section('title', 'Event')

@section('subtitle', 'Gain substantial knowledge on various topics by participating on our webinars!')


@section('content')
<div class="container pt-3 pb-3">
    <div class="row">
        
        @foreach($events as $event)
        <div class="col-sm-6 pt-3">
          <a href="{{$event->link}}" target="_blank">
            <div class="card text-center">
              <div class="card-body">
              <img class="card-img rounded" src="{{$event->img}}" alt="Card image">
              </div>
            </div>
          </a>
        </div>
        @endforeach

    </div>
</div>


@endsection
