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

class SportCampController extends Controller
{
    public function __construct(UserService $userService,Request $request){
		
		$this->userService = $userService;
		/*$this->middleware(function ($request, $next) {
               $this->user_id = $request->session()->get('authkey');
			   if($this->user_id != NULL)
				$this->user_data['users'] = $this->userService->getLoginData( $this->user_id );

                return $next($request);
        });*/
		DB::enableQueryLog();
    }
	public function index(Request $request){
		$metaContent = array("title"=>"Camps and Clinics");
		$data = array("metaContent"=>$metaContent);
		return view('sportCamp',compact('data'));
	}
	public function searchCamp(Request $request){
		$age_group = $request->age_group?$request->age_group:0;
		$camp_name = $request->camp_name;
		$location = $request->location;
		$gender = $request->gender?$request->gender:'Both';
		$page_value = $request->page_value;
		/*$sportSearch = SportClub::where(['status'=>1,'gender'=>$gender])
		->where('camp_name','like','%'.$camp_name.'%')
		->orwhere('location','like','%'.$location.'%')
		->get()->toArray();*/
		
		if($page_value == 'sports_club' ){
		$sportSearch = SportClub::where(['status' => 1])->where(function ($query) use($camp_name,$location,$age_group,$gender){
			$query->where('camp_name', 'like','%'.$camp_name.'%')->orwhere('camp','=' ,1)->orWhere('clinic' ,'=', 1)->orwhere('location', 'like','%'.$location.'%')->orwhere('age_group_primary' ,'>=' ,$age_group)->where('age_group_secondary' ,'<=' ,$age_group)->where('gender','=',$gender) ;	})->get()->toArray();
		}
		if($page_value == 'tournaments_club'){
		$sportSearch = SportClub::where(['status' => 1,'tournament'=>1 ])->where(function ($query) use($camp_name,$location,$age_group){
			$query->where('camp_name', 'like','%'.$camp_name.'%')->orwhere('location', 'like','%'.$location.'%')->orwhere('age_group_secondary' ,'<=', $age_group)->where('age_group_primary','>=' ,$age_group)->where('gender','=',$gender) ;	})->get()->toArray();
		}
		//dd( DB::getQueryLog() );
		if($sportSearch){
		$search = '';
		$search = '
		<div class="col_selector">
        <div class="sports_selected mb-5">
          <span>Related Search Sports/Camp/Clinic</span>
        </div>
      </div>
	  <div class="row">';
	  foreach($sportSearch as $value){
	  	$search .= '<div class="col-12 col-md-4"><div class="col_selector Tournament_images mb-5"><img src="'.asset("public/site_images/".$value['image_video']).'" class="img-fluid w-100" alt=""><div class="image_text text-center p-3 w-100"><h4 class="mb-0"><a href="'.url("/sport-detail?sport_id=$value[id]").'" class="d-block">'.$value['camp_name'].'</a></h4></div></div></div>';
		}
		$search .= '</div>';
		}else{
			$search = 'No Related Search Found';
		}
		echo $search;
		}
	public function sportDetail(request $request){
		//camp/sport detail
		if($request->sport_id != NULL){
			$camp_id = $request->sport_id;
			$sportDetail = SportClub::where(['status'=>1,'id'=>$camp_id])->get()->toArray();
		}
		// get slider images
		$slider_images = explode(',',$sportDetail[0]['image_video']);

		//fetch reviews of camps
		$reviewList = CampReviews::leftJoin('users', 'camp_reviews.user_id', '=', 'users.id')->select('camp_reviews.*','users.first_name','users.id')->where(['camp_reviews.status'=>1,'camp_reviews.club_id'=>$camp_id])->get()->toArray();

		//Related camps
		$relatedCamps = SportClub::whereNotIn('id',[$camp_id])->where(['status'=>1])->get()->toArray();
		
		$data  = array("sportDetail"=>$sportDetail,"slider_images"=>$slider_images,"reviewList"=>$reviewList,"relatedCamps"=>$relatedCamps);
		return view('sportDetail',compact('data'));
	}
	public function athelets_club(Request $request){
		if ($request->ajax()) {
			$pageNumber = $request->pageNumber;
			//return view('/admin/include/athletLstng', compact('athletes'));
			$fetch_clubs = SportClub::where(['status'=>1])->where(function ($query) {
				$query->where('camp','=' ,1)->orWhere('clinic' ,'=', 1) ;	})->orderBy('created_at', 'desc')->skip($pageNumber)->take(3)->get()->toArray();
			$view = '';
			foreach($fetch_clubs as $val){
			$view .= '<div class="col-12 col-md-4"><div class="col_selector Tournament_images mb-5"><img src="'.url("/public/site_images/".$val['image_video']).'" class="img-fluid w-100" alt="'.$val['camp_name'].'"><div class="image_text text-center p-3 w-100"><h4 class="mb-0"><a href="'.url("/sportstrives/sport-detail?sport_id=".$val['id']).'" class="d-block">'.$val['camp_name'].'</a></h4></div></div></div>';
			}
			return response()->json(['html'=>$view]);
		}
		$fetch_clubs = SportClub::where(['status'=>1])->where(function ($query) {
			$query->where('camp','=' ,1)->orWhere('clinic' ,'=', 1) ;	})->orderBy('created_at', 'desc')->skip(0)->take(3)->get()->toArray();
		//dd($fetch_clubs);
		//dd( DB::getQueryLog() );
		
		return view('athleteCamp',compact('fetch_clubs'));
	}

	public function sports_club(Request $request){
		$user_id = Session::get('authData')['userId'];
		if($user_id == NULL){
			$user_id = 0;
		}
		$related_added_sports = SportClub::where(['status'=>1])->where(function ($query) {
			$query->where('camp','=' ,1)->orWhere('clinic' ,'=', 1) ;	})->whereNotIn('user_id',[$user_id])->orderBy('created_at', 'desc')->get()->toArray();
		//dd( DB::getQueryLog() );
		$metaContent = array("title"=>"Promote your camp and clinic");
		$user_added_sports = SportClub::where(['status'=>1,'user_id'=>$user_id])->where(function ($query) { $query->where('camp','=' ,1)->orWhere('clinic' ,'=', 1) ;	})->orderBy('created_at', 'desc')->get()->toArray();
		$data =  array("user_added_sports" => $user_added_sports , "related_added_sports" => $related_added_sports,"metaContent"=>$metaContent);
		return view('sportClub',compact('data'));
	}
	public function clubForm(Request $request){
		return view('clubForm');
	}
	public function clubFormSubmit(Request $request){
		$this->validate($request, [
			'camp_name' => 'required|max:50',
			'is_sport'=>'required|array|max:4',
			'sporttype'=>'required|array|max:3',
			'age_group'=>'required|array|max:4',
			'gender'=>'required|min:4|max:6',
			'start_date'=> 'required|date',
			'end_date'=> 'required|date',
		//	'end_date'=>'date|after:start_date',
			'start_time_duration'=>'required|min:0|max:25',
			'end_time_duration'=>'required|min:0|max:25',
			'is_multiple_session'=>'required|min:0|max:25',
			'price'=>'required|max:12',
			'location'=>'required|max:1000',
			'description'=>'required|max:1000',
		]);
		$image_arry = array("jpeg","png","jpg","mpeg","ogg","mp4","webm","3gp","mov","flv","avi","wmv","ts");
		
		//image|mimes:jpeg,png,jpg,gif,svg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:2048  'image_video' => 'required|array|max:3'
		$user_id = Session::get('authData')['userId'];
		
	// Multiple Image Section
		if($request->image_video){
			$media_count = count($request->image_video);
			foreach($request->image_video as $val){
				$extns = $val->getClientOriginalExtension();
				if(!in_array($extns,$image_arry)){
					return  Redirect::to('/clubform')->withInput()->with('file_error', 'Wrong Format');
				}
				$imageName = rand().time().'.'.$val->getClientOriginalExtension();
				$img_name[] = $imageName;
				$val->move(public_path('site_images/'), $imageName);
			}
			$imageName = implode(',',$img_name);
		}else{
		$imageName = '';	
		}
		// End

		// sporttype
		$is_sport = implode(',',$request->is_sport);
		$sptype_count = count($request->sporttype);
		$clinic = 0;
		$camp = 0;
		$tournament = 0;
		if($sptype_count == 3){
			$clinic = 1;
			$camp = 1;
			$tournament = 1;
		}else{
			if (in_array("2", $request->sporttype)){
				$clinic = 1;
			}else if (in_array("1", $request->sporttype)){
				$camp = 1; 
			}else{
				$tournament = 1;
			}
		}

		$agegroup = implode('-',$request->age_group);
		$ageGroupArray = explode('-',$agegroup);
		$age_group_primary = $ageGroupArray[0];
		$age_group_secondary = $ageGroupArray[1];

		$clubform_data = array("clinic"=>$clinic,"camp"=>$camp,"tournament"=>$tournament,"camp_name"=>$request->camp_name,"is_sport"=>$is_sport,"age_group_primary"=>$age_group_primary,"age_group_secondary"=>$age_group_secondary,"gender"=>$request->gender,"start_date"=>$request->start_date,"end_date"=>$request->end_date,"start_time_duration"=>$request->start_time_duration,"end_time_duration"=>$request->end_time_duration,"is_multiple_session"=>$request->is_multiple_session,"price"=>$request->price,"location"=>$request->location,"description"=>$request->description,"image_video"=>$imageName,"user_id"=>$user_id);
		
		$user_data = SportClub::create($clubform_data);
		//dd( DB::getQueryLog() );exit;
		if($user_data){
			
			return  Redirect::to('/clubform')->with('club_form_msg', 'Successfully');
		}else{
			return  Redirect::to('/clubform')->withInput()->with('club_form_msg', 'Try Again');
		}
	}
	public function ratingSubmt(Request $request){
			$user_id = Session::get('authData')['userId'];
			$club_id = base64_decode($request->club_id);
			$camp_id = $request->camp_id;
			$validator = Validator::make(collect($request)->toArray(), [
				'message' => 'required|min:6|max:250',
				'rating' => 'required|numeric|between:1,5'
			]);
			if ($validator->fails()){
				return Redirect::to('/sport-detail?sport_id='.$club_id)->withInput()->withErrors($validator);
			}else{
				$rating_data = array("rating"=>$request->rating,"message"=>$request->message,"user_id"=>$user_id,"club_id"=>$club_id);
				$user_data = CampReviews::create($rating_data);
				return  Redirect::to('/sport-detail?sport_id='.$club_id)->withInput()->with('success', 'Successfully');
			}
	}
}