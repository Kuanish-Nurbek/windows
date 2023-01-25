<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tag;

class TagController extends Controller
{
    
    public function show(){
        $tag = Tag::find(1);
        dump($tag->posts);
    }
}
