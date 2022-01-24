<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'body',
        'user_id',
    ];
    
    public function getByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
        public function comments()
    {
        // 投稿は複数のコメントを持つ
        return $this->hasMany('App\Comment');
    }
    
    public function likes()
    {
     return $this->belongsToMany('App\User','likes')->withTimestamps();
    }
}
