<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    //protected $dates=['deleted_time'];

    // 关联用户
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // 评论模型
    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('created_at', 'desc');
    }
}
