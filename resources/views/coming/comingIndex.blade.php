@extends("template.main")


@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block h-100 w-100" src="{{ URL::asset('img/soon.jpg') }}" alt="First slide">
    </div>
  </div>
</div>
@endsection