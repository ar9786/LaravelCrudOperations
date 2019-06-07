<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    // public $table = "blogs";
    protected $fillable = [
        'blog_id','user_id','msg','posted_id'];
}
