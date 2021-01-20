@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3 p-3" style="padding:5rem">
            <img src="{{$user->profile->ProfileImage() }}"
             class="img-circle"
            width="150" height="150">
        </div>
        <div class="col-sm-9">
        <div style="flex:d-flex;">
        <h1>{{$user->username}}</h1>
        <span style="padding:1rem;">
        <a href="/p/create" style="padding-right:2rem;">Add new posts</a>
        
        <a href="/profile/{{$user->id}}/edit">Edit Profile</a> 
        
         {{-- <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button> --}}
        
        </span><div>
        <div class="d-inline-flex">
            <div class="col-sm-4"><strong>{{$user->posts->count()}}</strong> posts</div>
            {{-- <div class="col-sm-4"><strong>23k</strong>followers</div> --}}
            {{-- <div class="col-sm-4"><strong>212</strong>posts</div> --}}
        </div>
        <div style="padding-top:5rem;padding-bottom:1rem;font-weight:bold;">
        {{$user->profile->title}} 
        </div>
        <div>
        {{$user->profile->description}}
        </div>
        <div style="font-weight:bold">
        <a href="">{{$user->profile->url}}  </a>
       
        </div>
        </div>
    </div>


        <div class="row" style ="padding-top:4rem">
            
            
            @foreach($user->posts as $post)
            <div class="col-sm-4" style="padding:2rem">
            <a href="/p/{{$post->id}}">
            <img src="/storage/{{$post->image}}" alt="" height="250" width="250">

            </a>
        
            </div>
            @endforeach
            
           
            
        
    </div>

</div>
@endsection
