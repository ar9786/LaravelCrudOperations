<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
//use User;
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

class TournamentController extends Controller
{
    public function __construct(UserService $userService,Request $request){
		
		$this->userService = $userService;
		DB::enableQueryLog();
    }
    public function index(){
        $metaContent = array("title"=>"Tornei");
				$data = array("metaContent"=>$metaContent);
        return view('sportTournament',compact('data'));
    }
    public function tournaments_club(Request $request){
		$user_id = Session::get('authData')['userId'];
		if($user_id == NULL){
			$user_id = 0;
		}
		$related_added_trmts = SportClub::where(['status'=>1,'tournament'=>1])->where(function ($query) {
			$query->where('camp','=' ,1)->orWhere('tournament' ,'=', 1) ;	})->where(function ($query) {
				$query->where('clinic','=' ,1)->orWhere('tournament' ,'=', 1) ;	})->whereNotIn('user_id',[$user_id])->orderBy('created_at', 'desc')->get()->toArray();
		//dd( DB::getQueryLog() );
		$metaContent = array("title"=>"Promote your tournament");
		$user_added_trmts = SportClub::where(['status'=>1,'clinic'=>1,'tournament'=>1])->where(function ($query) {
			$query->where('camp','=' ,1)->orWhere('tournament' ,'=', 1) ;	})->where(function ($query) {
				$query->where('clinic','=' ,1)->orWhere('tournament' ,'=', 1) ;	})->orderBy('created_at', 'desc')->get()->toArray();
		$data =  array("user_added_trmts" => $user_added_trmts , "related_added_trmts" => $related_added_trmts,"metaContent"=>$metaContent);
		return view('tournamentClub',compact('data'));
	}
}
