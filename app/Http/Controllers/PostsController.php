<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

use App\Post;

class PostsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('posts.index');
    }
    public function create()
    {   
        
        return view('posts.create');
    } 

    public function store(Request $request)
    {
        $this->validate($request,array(
            'caption'=>'required|max:255',
            'image' =>'required|image',
        ));

        $image_path = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$image_path}"))->fit(1200,1100);
        
        $image->save();

        

      auth()->user()->posts()->create([
          'caption'=>$request['caption'],
          'image'=>$image_path
      ]);
        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(Post $post){
            return view('posts.show', compact('post'));
    }
}
