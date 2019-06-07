<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Exception;
use Auth;
use App\Services\UserService;
use Session;
use DB;
use Instagram;

class SocialAuthController extends Controller
{
	public function __construct(UserService $userService){
		$this->userService = $userService;
		//DB::enableQueryLog();
	}
	public function instaredirect(Request $request){
		$authUrl = Instagram::authorize([], function ($url, $provider) use ($request) {
		    $request->session()->put('instagramState', $provider->getState());
		    return $url;
		});
		return redirect()->away($authUrl);
	}
	public function instacallback(Request $request){
		if(!$request->session()->exists('role')){
			return redirect('/');
		}
		$role = $request->session()->get('role');
		$request->session()->forget('role');
		/*if (!$request->has('state') || $request->state !== $request->session()->get('instagramState')) {
		    abort(400, 'Invalid state');
		}
		if (!$request->has('code')) {
		    abort(400, 'Authorization code not available');
		}*/
		$token = Instagram::getAccessToken('authorization_code', [
		    'code' => $request->code,
		    'scope' => 'basic+public_content+comments+relationships+likes+follower_list',
		]);
		$instagramUser = Instagram::getResourceOwner($token);
		$name = $instagramUser->getName();
		$bio = $instagramUser->getDescription();
		$feedRequest = Instagram::getAuthenticatedRequest(
		    'GET',
		    'https://api.instagram.com/v1/users/self',
		    $token
		);
		$client = new \GuzzleHttp\Client();
		$feedResponse = $client->send($feedRequest);
		$instagramFeed = json_decode($feedResponse->getBody()->getContents());
		$insta_id = $instagramFeed->data->id;
		$username = $instagramFeed->data->username;
		$inta_pic = $instagramFeed->data->profile_picture;
		$existingUser_by_instaID = User::Where(['insta_social_id' => $insta_id])->get()->toArray();
		if(count($existingUser_by_instaID)){
            // log them in
			$authData = $this->userService->getLoginData( $existingUser_by_instaID[0]['id'] ); 
            Session::put('authData',  $authData);
        }else {
            // create a new user
			$user_data = array('first_name'=>$username,'role'=>$role,'login_type'=>'instagram','insta_social_id'=>$insta_id,'avatar' => $inta_pic);
			$user_data1 = User::create($user_data);
			$user_data = $this->userService->getLoginData( $user_data1->id );
			Session::put('authData',  $user_data);
        }
        return redirect()->to('/');
	}
    public function fbredirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function fbcallback(Request $request){
		if(!$request->session()->exists('role')){
			return redirect('/');
		}
		$role = $request->session()->get('role');
		$request->session()->forget('role');
		try {
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect('/');
        }
		$existingUser_by_email = User::Where(['email' => $user->email,'fb_social_id' => $user->id])->get()->toArray();
		if(count($existingUser_by_email)){
            // log them in
		   $authData = $this->userService->getLoginData( $existingUser_by_email[0]['id'] ); 
           Session::put('authData',  $authData);
        }else {
            // create a new user
			$hash = \Hash::make(rand(1,10000));
			$first_name = explode(' ',$user->name);
			if(!empty($first_name[1])){
				$last_name = $first_name[1];
			}else{
				$last_name = '';
			}
			$user_data = array('email' =>$user->email,'first_name'=>$first_name[0],'last_name'=>$last_name,'role'=>$role,'login_type'=>'facebook','fb_social_id'=>$user->id,'avatar'=>$user->avatar);
			$user_data1 = User::create($user_data);
			$user_data = $this->userService->getLoginData( $user_data1->id );
			Session::put('authData',  $user_data);
        }
        return redirect()->to('/');
    }
	
	public function gredirect(){
		return Socialite::driver('google')->redirect();
	}
	public function gcallback(Request $request){
        if(!$request->session()->exists('role')){
			return redirect('/');
		}
		$role = $request->session()->get('role');
		$request->session()->forget('role');
		try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/');
        }
		$existingUser_by_email = User::Where(['email' => $user->email,'g_social_id' => $user->id])->get()->toArray();
		if(count($existingUser_by_email)){
            // log them in
			$authData = $this->userService->getLoginData( $existingUser_by_email[0]['id'] ); 
			Session::put('authData',  $authData);
        }else {
			
            // create a new user
			$hash = \Hash::make(rand(1,10000));
			$first_name = explode(' ',$user->name);
			if(!empty($first_name[1])){
				$last_name = $first_name[1];
			}else{
				$last_name = '';
			}
			$user_data = array('email' =>$user->email,'first_name'=>$first_name[0],'last_name'=>$last_name,'role'=>$role,'login_type'=>'google','g_social_id'=>$user->id,'avatar'=>$user->avatar);
			$user_data1 = User::create($user_data);
			$user_data = $this->userService->getLoginData( $user_data1->id );
			Session::put('authData',  $user_data);
        }
        return redirect()->to('/');
    }
}
