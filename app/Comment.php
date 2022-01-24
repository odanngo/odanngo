<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        protected $fillable = [
        'message_id',
        'name',
        'comment', 
    ];
    
        public function message()
    {
        // コメントは1つの投稿に所属する
        return $this->belongsTo('App\Messge');
    }
}
