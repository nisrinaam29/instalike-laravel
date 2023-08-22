@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">

            @csrf
            @method('PATCH');
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class=" mb-3">
                        <label for="title" class="col-md-4 col-form-label ">Title</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus name="title">

                            @error('title')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <label for="description" class="col-md-4 col-form-label ">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                                    value="{{ old('description')?? $user->profile->description }}" autocomplete="description" autofocus name="description">
    
                                @error('title')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="url" class="col-md-4 col-form-label ">url</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                    value="{{ old('url')?? $user->profile->url}}" autocomplete="url" autofocus name="url">
    
                                @error('title')
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="row pt-4">
                            <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @error('image')
                                <strong>{{ $message }}</strong>
                            @enderror

                        </div>
                        <div class="row pt-3">
                            <button class="btn btn-primary col-md-4">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
