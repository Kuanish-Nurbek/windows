<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;


class CommentController extends Controller
{
    public function update(CommentRequest $request){
        dump('123');
    }
}
