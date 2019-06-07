<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use DB;
use App\CampReviews;
use App\SportClub;
use App\Services\DataService;
use App\Services\UserService;
use App\Services\CheckSession;
use Auth;
use Session;
use Carbon\Carbon;
use App\Constants\GlobalConstants;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AthleteController extends Controller
{
    public function index(Request $request){
        $user_id = Session::get('authData')['userId'];
		if($user_id == NULL){
			$user_id = 0;
		}
		$related_added_sports = SportClub::where(['status'=>1])->where(function ($query) {
			$query->where('camp','=' ,1)->orWhere('clinic' ,'=', 1) ;	})->whereNotIn('user_id',[$user_id])->orderBy('created_at', 'desc')->get()->toArray();
		//dd( DB::getQueryLog() );
		$metaContent = array("title"=>"Young Athlete");
		$user_added_sports = SportClub::where(['status'=>1,'user_id'=>$user_id])->where(function ($query) { $query->where('camp','=' ,1)->orWhere('clinic' ,'=', 1) ;	})->orderBy('created_at', 'desc')->get()->toArray();
		$data =  array("user_added_sports" => $user_added_sports , "related_added_sports" => $related_added_sports,"metaContent"=>$metaContent);
		return view('youngAthlete',compact('data'));
    }
}
