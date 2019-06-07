<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    public $table = "blogs";
    protected $fillable = [
        'title','blog_url','keyword','description','content','status','user_id'];
}
