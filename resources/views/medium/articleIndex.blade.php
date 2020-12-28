@extends("template.section")


@section('jumbotronImage', 'img/article.jpg')
@section('title', 'Article')

@section('subtitle', 'Get the latest news here')


@section('content')
<div class="container pt-3 pb-3">
    <div class="row">

      @if(!$medium->isEmpty())
            @foreach($medium as $key => $value)
            <div class="col-sm-6">
                <div class="card bg-dark text-white ">
                        <img class="card-img rounded" src="/{{$value->img}}" alt="Card image" style="height:15vw;">
                    <div class="card-img-overlay d-flex align-items-end transparent rounded">
                        <div class="#">
                            <a href="/article/{{$value->slug}}"> <h5 class="card-title">{{$value->title}}</h5> </a>
                            <p class="card-text"> {{ substr($value->description, 0, 100) }} {{ strlen($value->description) > 100 ? '....' : "" }} </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
          <div class="vertical-center text-center">
            <h1 class="display-4"> No Post... </h1>
          </div>
        @endif


    </div>
</div>


@endsection

