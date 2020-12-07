@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col offset-2">
      <div class="row">
        <h2>Add New Post</h2>
      </div>
      <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group row">

          <label for="caption" class="col-md-4 col-form-label">Post caption</label>
            <input id="caption"
                   type="text"
                   class="form-control @error('caption') is-invalid @enderror"
                   name="caption"
                   value="{{ old('name') }}"
                   required autocomplete="caption" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="row">
          <label for="image" class="col-md-4 col-form-label">Post image</label>

          <input type="file" class="form-control-file" id="image" name="image">
          @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row pt-3">
          <button class="btn btn-primary">Add New Post</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
