<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use SoftDeletes;
    use Searchable;

    //protected $dates=['deleted_time'];

    // 定义索引里面的type
    public function searchableAs()
    {
        return "post";
    }

    // 定义有哪些字段需要搜索
    public function searchableArray()
    {
        return [
            'title'=> $this->title,
            'content'=> $this->content,
        ];
    }

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

    // 和赞关联
    public function zan($user_id)
    {
        return $this->hasOne('App\Zan')->where('user_id', $user_id);
    }

    // 全部赞
    public function zans()
    {
        return $this->hasMany('App\Zan');
    }
}
