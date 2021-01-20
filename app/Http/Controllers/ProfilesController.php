<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(User $user)
    {   
        // $follows = (auth()->user()) ? auth()->user()->following->contains($user->id):false;
        // $post = Profile::find('user_id');
        return view('profiles.index', compact('user'))->with($user->id);
    } 

    public function edit(User $user)
    {   
        
        return view('profiles.edit', compact('user'));
    }
    public function update(Request $request,$id)
    {
        
         $this->validate($request,array(
            'title'=>'required|max:255',
            'description' =>'required',
            'url' =>'required',
            'image'=>'required',
        ));
     
        
        if(request('image')){
            $image_path = request('image')->store('profiles', 'public');
            $image = Image::make(public_path("storage/{$image_path}"))->fit(1000,1000);
            
            $image->save();
            $ImageArr  = ['image' =>$image_path];
        }
        
        auth()->user()->profile()->update([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'url'=>$request['url'],
            $ImageArr ??[],
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }
}
