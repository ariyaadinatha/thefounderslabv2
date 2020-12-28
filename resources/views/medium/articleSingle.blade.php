@extends("template.article")

@section('jumbotronImage')
"/{{ $medium->img }}"
@endsection

@section('title')
  {{ $medium->title }}
@endsection

@section('subtitle')
  {{ $medium->created_at }}
@endsection

@section('content')
<!--==========================
    Article Section
============================-->
<div class="container">

<img src="/{{ $medium->img }}" class="img-fluid pt-2 pb-2" alt="Responsive image">
  <header class="section-header">
    <h3> {{ $medium->title }} </h3>
  </header>

  <div class="row">
      <div class="">
        <p class="description text-justify"> {{ $medium->description }} </p>
      </div>
  </div>

</div>

@endsection
