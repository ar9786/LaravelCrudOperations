<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportClub extends Model
{
    protected $fillable = [
        'camp_name', 'is_sport', 'age_group_primary','gender','start_date','end_date','start_time_duration','end_time_duration','is_multiple_session','price','location','description','image_video','status','user_id','age_group_secondary','camp','clinic','tournament'
    ];
}
