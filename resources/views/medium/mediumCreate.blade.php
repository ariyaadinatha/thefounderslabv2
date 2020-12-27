@extends('template.create')

@section('content')
<div class="container container-body p-5 h-75">
    <form action="/medium/store" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row pt-5">
            
            <div class="col-8 offset-2">
                <h2 class="display-4"> Create Medium </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="title" class="col-form-label"> Title </label>
                        <input id="title" type="text" placeholder="Tips Memelihara Tuyul Untuk Meningkatkan Keuntungan Bisnis" class="form-control-file @error('title') is-invalid @enderror" 
                        name="title" required autocomplete="title" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                   <label for="description"> Content </label>
                   <textarea class="form-control" id="description" name="description" required></textarea>
                 </div>
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


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="link" class="col-form-label"> Registration Link </label>
                        <input id="link" type="text" placeholder="https://www.  (optional)" class="form-control-file @error('link') is-invalid @enderror" 
                        name="link" autocomplete="link" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="type"> Type : </label>
                    <select class="form-control" id="type" name="type">
                      <option value=1> Article </option>
                      <option value=2> Podcast </option>
                    </select>
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