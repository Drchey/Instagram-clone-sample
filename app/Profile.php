<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

    public function ProfileImage()
    {
        $image_path =($this->image) ? $this->image :'/profiles/Mnb8gLMngkzBGM6FCfVGF37kcGyk3kDv7eacz6mJ.jpeg';
    
        return '/storage/' .$image_path;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);      
    }
}

