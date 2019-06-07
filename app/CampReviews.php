<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampReviews extends Model
{
    protected $fillable = [
        'message','status','user_id','rating','club_id'
    ];
}
