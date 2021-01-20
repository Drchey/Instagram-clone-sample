@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
     

        <div class="row">
            <div class="row offset-2">
                <h1>ADD POST</h1>
            </div>
            <div class="col-md-8 offset-2">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class=" control-label" style="padding:1rem;">Post Title</label>

                                
                                        <input id="title" 
                                        type="text" class="form-control"
                                        name="title" value="{{ old('title') ?? $user->profile->title }}"
                                        required autofocus>

                                        @if ($errors->has('title'))
                                            
                                                <strong>{{ $errors->first('title') }}</strong>
                                           
                                        @endif
                                
                                </div>
                                </div>
                                <div class="col-md-8 offset-2">
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class=" control-label" style="padding:1rem;">Post description</label>

                                
                                        <input id="description" 
                                        type="text" class="form-control"
                                        name="description" value="{{ old('description') ?? $user->profile->description }}"
                                        required autofocus>

                                        @if ($errors->has('description'))
                                            
                                                <strong>{{ $errors->first('description') }}</strong>
                                           
                                        @endif
                                
                                </div>
                                </div>
                                <div class="col-md-8 offset-2">
            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                    <label for="url" class=" control-label" style="padding:1rem;">Post url</label>

                                
                                        <input id="url" 
                                        type="text" class="form-control"
                                        name="url" value="{{ old('url') ?? $user->profile->url }}"
                                        required autofocus>

                                        @if ($errors->has('url'))
                                            
                                                <strong>{{ $errors->first('caption') }}</strong>
                                           
                                        @endif
                                
                                </div>
                                </div>
                </div>
       
                
                 <div class="col-md-8 offset-2">

                 <label for="image" class=" control-label" style="padding:1rem;">Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                        @if ($errors->has('image'))
                            
                                <strong>{{ $errors->first('image') }}</strong>
                        
                        @endif

                 </div>
                      
                    

                <div class="row" style="padding-top:6rem;">
                <div class="col-md-8 offset-2">
                <button class="btn btn-primary">Save Profile</button>
                </div>
                </div>
                    </form>
        </div>
</div>
@endsection
