<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletters extends Model
{
    public $table = "newsletters";
    protected $fillable = ['email'];
}