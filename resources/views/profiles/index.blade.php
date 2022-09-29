@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 ps-5 p-3">
            <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072821__340.jpg"  class="rounded-circle h-100 w-100">
        </div>
        <div class="col-9 ps-5 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>

                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
                
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> post</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong> {{$user->profile->title}}</strong></div>
            <div class="">{{$user->profile->description}} </div>
            <div class="div"><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>


    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post ->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">

                </a>
            </div>
        @endforeach
            
    </div>
    
</div>
@endsection
