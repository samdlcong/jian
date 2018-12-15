<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    //protected $dates=['deleted_time'];
    protected $guarded; // 不可以注入字段
    protected $fillable = ['title', 'content']; // 可以注入数据字段
}
