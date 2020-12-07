@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col offset-2">
      <div class="row">
        <h2>Edit profile</h2>
      </div>
      <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group row">

          <label for="title" class="col-md-4 col-form-label">Title</label>
            <input id="title"
                   type="text"
                   class="form-control @error('title') is-invalid @enderror"
                   name="title"
                   value="{{ old('title') ?? $user->profile->title }}"
                   required autocomplete="title" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group row">

          <label for="description" class="col-md-4 col-form-label">Description</label>
            <input id="description"
                   type="text"
                   class="form-control @error('description') is-invalid @enderror"
                   name="description"
                   value="{{ old('description') ?? $user->profile->description }}"
                   required autocomplete="description" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group row">

          <label for="url" class="col-md-4 col-form-label">url</label>
            <input id="url"
                   type="text"
                   class="form-control @error('url') is-invalid @enderror"
                   name="url"
                   value="{{ old('url') ?? $user->profile->url }}"
                   required autocomplete="url" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="row">
          <label for="image" class="col-md-4 col-form-label">Select profile image</label>

          <input type="file" class="form-control-file" id="image" name="image">
          @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row pt-3">
          <button class="btn btn-primary">Edit My profile</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
