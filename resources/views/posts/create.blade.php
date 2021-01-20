@extends('layouts.app')

@section('content')

<div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="row offset-2">
                <h1>ADD POST</h1>
            </div>
            <div class="col-md-8 offset-2">
            <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
                                    <label for="caption" class=" control-label" style="padding:1rem;">Post Caption</label>

                                
                                        <input id="caption" 
                                        type="text" class="form-control"
                                        name="caption" value="{{ old('caption') }}"
                                        required autofocus>

                                        @if ($errors->has('caption'))
                                            
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
                      
                    

                <div class="row" style="padding-top:2rem;">
                <div class="col-md-8 offset-2">
                <button class="btn btn-primary">Add new post</button>
                </div>
                </div>
                    </form>
        </div>
@endsection
