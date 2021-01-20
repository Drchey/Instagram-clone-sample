@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-sm-6">
                    <img src="/storage/{{$post->image}}" alt="" width="500">
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{$post->user->profile->ProfileImage()}}" class="img-circle" width="50" height="50">
                    </div>
                    <div class="col-sm-4">
                        <h4 style="font-weight: bold;"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h4>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" style="font-weight: bold;padding:4rem;">Follow</a>
                    </div>
                </div>
<hr>
                <p><span style="font-weight: bold;">
                    <a href="/profile/{{$post->user->id}}">
                        {{$post->user->username}}</a></span>{{$post->caption}}</p>
            </div>
    </div>
</div>
@endsection

