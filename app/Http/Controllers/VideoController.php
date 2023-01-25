<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;
use App\Models\Comment;

class VideoController extends Controller
{
    public function show(){
        $comments = Video::find(1);

        foreach($comments -> commentable as $comment){
            dump($comment['body']);
        }

        $comment = Comment::find(1);
        dump($comment -> commentable); // экземпляр модели (Post или Video)


        $latestComment = Video::find(1) -> latestComment;
        $oldestComment = Video::find(1) -> oldestComment;
        dump($latestComment);
        dump($oldestComment);
    }
}
