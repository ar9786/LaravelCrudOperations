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

class SportAssociationController extends Controller
{
	public function __construct(){

		DB::enableQueryLog();
	}
    public function index(Request $request){
        $user_id = Session::get('authData')['userId'];
		if($user_id == NULL){
			$user_id = 0;
		}
		$related_added_trmts = SportClub::where(['status'=>1])->where(function ($query) {
			$query->where('camp','=' ,1)->Where('tournament' ,'=', 1) ;	})->where(function ($query) { $query->where('clinic','=' ,1)->Where('tournament' ,'=', 1) ;	})->whereNotIn('user_id',[$user_id])->orderBy('created_at', 'desc')->get()->toArray();
		//dd($related_added_trmts);
		//dd( DB::getQueryLog() );
		$metaContent = array("title"=>"Promote your tournament");
		$user_added_trmts = SportClub::where(['status'=>1,'user_id'=>$user_id])->orderBy('created_at', 'desc')->get()->toArray();
		$data =  array("user_added_trmts" => $user_added_trmts , "related_added_trmts" => $related_added_trmts,"metaContent"=>$metaContent);
		return view('association',compact('data'));
    }
}
