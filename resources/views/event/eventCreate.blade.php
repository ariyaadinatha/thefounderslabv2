@extends('template.main')

@section('content')
<div class="container container-body p-5 h-75">
    <form action="/event/store" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row pt-5">
            
            <div class="col-8 offset-2">
                <h2 class="display-4"> Create Event </h2>
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="image" class="col-form-label"> Image </label>
                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" 
                        name="image" required autocomplete="image" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div>
            <div class="row pt-3">
                <div class="col-8 offset-2">
                    <button class="btn btn-primary"> Create </button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection