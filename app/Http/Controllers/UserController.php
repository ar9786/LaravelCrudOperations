<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
//use User;
use DB;
use App\User;
use App\Services\DataService;
use App\Services\UserService;
use App\Services\CheckSession;
use Auth;
use Session;
use Carbon\Carbon;
use App\Constants\GlobalConstants;
use Mail;
use Cookie;

class UserController extends Controller
{
    public function __construct(UserService $userService){
        $this->userService = $userService;
        DB::enableQueryLog();
    }
    public function userLogout(Request $request){
        Auth::logout();
        $request->session()->forget('authData');
        return redirect('/');
    }
    // Reset Password
    public function resetPassword(Request $request){
            return view('resetPassword');
    }
    public function resetPasswordSubmit(Request $request){
        $password = $request->password;
        $reset_token = $request->reset_token;
        $user_id = $request->user_id;
        $validator = Validator::make(collect($request)->toArray(), [
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ]);
        if ($validator-> fails()){
            return response()->json($validator->errors(), 200);
        }else{
            $user = User::where(['id'=> $user_id,'reset_token'=>$reset_token])->first();
            if(!empty($user->resetTokenExpireTime)){
                $getTime = User::select(DB::raw("TIMESTAMPDIFF(MINUTE,'$user->resetTokenExpireTime',NoW()) as diff_time " ))->where(['id'=> $user_id,'reset_token'=>$reset_token])->first();
                if( $getTime->diff_time > 10 ){
                    $array['password'] = "Time Expired";
                }else{
                    $hash = \Hash::make($request->password);
                    User::where('id', $user->id)->update(['reset_token'=>NULL,"resetTokenExpireTime"=>'0000-00-00 00:00:00','password'=>$hash]);
                }
            }else{
                $array['password'] = "Time Expired";
            }
            return $array; 
        }
    }
    public function resetTokenPssword(Request $request){
        $email = $request->email;
        $validator = Validator::make(collect($request)->toArray(), [
            'email' => 'required|email|max:75',
        ]);
        if ($validator-> fails()){
            return response()->json($validator->errors(), 200);
        }else{
            $user = User::where('email', '=', $email)->first();
            if ($user === null) {
                $array['exist'] = ["Email Id Not exist"];
                return json_encode($array); 
            }else{
                    $reset_token = mt_rand(100000, 999999);
                    User::where('id', $user->id)->update(['reset_token'=>$reset_token,"resetTokenExpireTime"=>now()]);
                    $to_name =  $user->first_name;
                    $to_email = $email;
                    $rest_link = url('/reset_password?reset_token='.$reset_token.'&user_id='.$user->id);
                    $data = array('name'=>$to_name,'rest_link' => $rest_link ,"body" => "Click here to reset password");
                    $mail = Mail::send(['html'=>'emails.mail'], $data, function($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)->subject('Reset Password');
                    $message->from('mail@sportstrives.com','Sportstrives');
                    });
            }
        }
    }

    public function index(Request $request){
		
		//echo $request->ip();exit;

    /*    // Mail Check
    $to_name = 'coder';
    $to_email = 'mcoderz87@mobilecoderz.com';
    $data = array('name'=>"Sam Jose", "body" => "Test mail");

    $mail = Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)->subject('Artisans Web Testing Mail');
        $message->from('mcoderz87@gmail.com','Sportstrives');
    });
dd($mail);*/
        //dd(Session::get('authData'));
        /*$user_data =[];
        $user_id = $request->session()->get('authkey');
        if($user_id != NULL)
        $user_data['users'] = $this->userService->getLoginData( $user_id );*/
        $cookie_data = array("cookie_email"=>Cookie::get('cookie_email'),"cookie_pass"=>Cookie::get('cookie_pass'));
        $data = array("cookie_data"=>$cookie_data);
        return view('welcome',compact('data'));
    }
    
    public function userlogin(Request $request){
        
        if (Session::token() !== $request->_token) 
        {
            // Change this to return something your JavaScript can read...
           echo json_encode(["csrf-error"=>"Please try again"]);
        }


        $validator = Validator::make(collect($request)->toArray(), [
            'login_email' => 'required|email|max:75',
            'login_password'=>'required|min:6|max:25'
       ]);
       if ($validator-> fails()){
            return response()->json($validator->errors(), 200);
        }else{
            $remember_me = $request->has('remember_token') ? true : false;
            $login_email = $request->login_email;
            $login_password = $request->login_password;
            if (Auth::attempt(array('email' => $login_email, 'password' => $login_password),true)){
                if($remember_me == 1){
                    Cookie::queue(Cookie::make('cookie_email', $login_email, 60));
                    Cookie::queue(Cookie::make('cookie_pass', $login_password, 60));
                }
                $user_id = Auth::user()->id;
                $authData = $this->userService->getLoginData( $user_id ); 
                Session::put('authData',  $authData);
                if(Auth::user()->role == GlobalConstants::ADMIN_ROLE && Auth::user()->id == 1){
                    return 0;
                }else{
                    return 1;
                }
            }
            else {        
                    return 2;
            }
        }
    }

    public function signup(Request $request){
        
        $validator = Validator::make(collect($request)->toArray(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|max:75|unique:users',
            'password'=>'required|min:6|max:25',
            'postal_code'=> 'required|min:6|max:6',
            'privacy-policy' => 'required',
            'phone_no' => 'required|min:10|max:12',
			'role'=>'required|integer|between:2,3',
       ]);
        if ($validator-> fails()){
            return response()->json($validator->errors(), 200);
            //return redirect('/')->withErrors($validator, 'signup_error');
        }else{
		$role = $request->role;
        $hash = \Hash::make($request->password);
        $user_data = array('email' =>$request->email, 'password' => $hash,'postal_code'=>$request->postal_code,'first_name'=>$request->first_name,'last_name'=>$request->last_name,'phone_no'=>$request->phone_no,'role'=>$request->role,'login_type'=>'normal');
        $user_data = User::create($user_data)->id;
        //$result = array("status"=>"success",$user_data);
        return 1;
       // $this->_login($request);
        }
    }
    public function ajaxRequest(Request $request){
		if($request->has('role')){
			$role = $request->role;
			if($role == '2' || $role == '3'){
				$request->session()->put('role', $role);
				echo 1;
			}
        }
        if($request->has('checkLogin')){
            $value = Session::get('authData')['userId'];
            if($value){
                echo 1;
            }else{
                echo 0;
            }
        }

    }
}
