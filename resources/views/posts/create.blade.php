@extends('layouts.app')

@section('content')
   <form action="/p" enctype="multipart/form-data" method="POST">

    @csrf
   <div class="row">
    <div class="col-8 offset-2">
        <div class="row">
            <h3>Add New Post</h3>
        </div>
        <div class=" mb-3">
            <label for="caption" class="col-md-4 col-form-label ">Post Caption</label>

            <div class="col-md-6">
                <input id="caption" type="text" class="form-control @error('usercaption') is-invalid @enderror"
                     value="{{ old('caption') }}" autocomplete="caption" autofocus name="caption">

                @error('caption')
            
                        <strong>{{ $message }}</strong>
              
                @enderror
            </div>
            <div class="row pt-4">
                <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
             
                    <strong>{{ $message }}</strong>
          
            @enderror

            </div>
            <div class="row pt-3">
                <button class="btn btn-primary col-md-4">Add new Post</button>
            </div>
        </div>
    </div>
</div></form>

    </div>
@endsection
