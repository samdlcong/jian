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
}
