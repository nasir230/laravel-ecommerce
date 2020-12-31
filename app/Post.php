<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','des','des','thumbnail','user_id','	authore'
     ];
 
     protected $dates = [
         'created_at',
         'updated_at',
     ];

     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     public function comments()
     {
         return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
     }
}
