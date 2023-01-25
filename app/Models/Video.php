<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function commentable(){
        return $this -> morphMany(Comment::class, 'commentable');
    }

    public function latestComment(){
        return $this -> morphOne(Comment::class, 'commentable') -> latestOfMany();
    }
    public function oldestComment(){
        return $this -> morphOne(Comment::class, 'commentable') -> oldestOfMany();
    }
    public function bestImage(){
        return $this->morphOne(Image::class, 'imageable')->ofMany('likes', 'max');
    }
    public function currentPricing(){
        return $this->hasOne(Price::class)->ofMany([
            'published_at' => 'max',
            'id' => 'max',
        ], function ($query) {
            $query->where('published_at', '<', now());
        });
    }

    // получить все теги поста
    public function tags(){
        return $this -> morphToMany(Tag::class, 'taggable');
    }
}
