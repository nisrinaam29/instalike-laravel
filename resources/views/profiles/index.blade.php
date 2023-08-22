@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-3">
                <img src="{{ $user->profile->profileImage()}}"
                    class="rounded-circle" style="height: 160px">
            </div>
            <div class="col-9">
                <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h4>{{$user->username}}</h4>
                       
               </div>
                    
                   
                    <div > @can('update', $user->profile)
                        <a href="/p/create">Add Post</a>
                        @endcan</div>
                    
                </div>
                <div> 
                    @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                    @endcan
                </div>
               
                <div class="d-flex pt-2">
                    
                    <div><strong>{{$user->posts->count()}}</strong> Posts</div>
                    <div class="ps-4"><strong>80,7M</strong> Followers</div>
                    <div class="ps-4"><strong>0</strong> Following</div>
                </div>
                <div class="pt-2"><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>

                <div><a href="#">{{$user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-4">
            @foreach ($user->posts as $post)
            <div class="col-4 pb-2">
                <div>
                    <a href="/p/{{$post->id}}"> <img src="/storage/{{ $post->image}}" alt="" class="w-100"></a>
                   
                </div>
            </div>
        
            
            @endforeach
        </div>
        
    </div>
@endsection
