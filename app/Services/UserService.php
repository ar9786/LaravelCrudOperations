<?php
/**
 * User: mobilecoderz
 * Date: 09/01/2019
 * Time:02:11 PM
 */

namespace App\Services;

use App\Constants\ErrorConstants;
use App\Constants\GlobalConstants;
use App\User;
use Keygen\Keygen;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB;
use Auth;

class UserService
{


    public function getUniqueApiUserId($length)
    {
        $key = strtoupper(Keygen::alphanum($length)->generate());

        if (!User::where('userId', $key)->exists()) {
            return $key;
        } else {
            return $this->getUniqueApiUserId();
        }
    }

    public function verifyJwtRequest($token)
    {
        $user = JWTAuth::authenticate($token);

        if ($user) {
            return [
                'status' => true,
                'user' => $user
            ];
        } else {
            return [
                'status' => false,
                'user' => ""
            ];
        }
    }


    public function getRawProfileData($userId)
    {
        $userData = User::where('id', $userId)->first();

        $user = [
            'userId' => $userData->id,
            'email' => $userData->email,
            'FirstName' => $userData->FirstName,
            'LastName' => $userData->LastName,
            'isActive' => $userData->isActive,
            'socialId'=>$userData->socialId,
            'phoneNumber' => $userData->phoneNumber,
            'requestType' => $userData->requestType,
            'image'       => $userData->imagee,
            'verifyotpStatus' => $userData->verifyotpStatus,
            'created_at' => $userData->created_at
        ];
        
        return $user;
    }

    public function getLoginData($user_id){
        $userData = User::findOrFail($user_id);
        $user = [];
        if($userData){
            $user = [
                'userId' => $userData->id,
                'email' => $userData->email,
                'FirstName' => $userData->first_name,
                'LastName' => $userData->last_name,
                'role'=> $userData->role,
                'status' => $userData->status,
                'socialId'=>$userData->social_id,
                'phoneNumber' => $userData->phone_no,
                'login_type'  => $userData->login_type,
                'postal_code' => $userData->postal_code,
                'created_at' => $userData->created_at
            ];
            return $user;
        }
    }




    // Using in web view
    public function getProfileData($userId)
    {

        $userData = User::where('userId', $userId)->first();

        $user = [
            'userId' => $userData->userId,
            'userName' => $userData->username,
//            'description' => $userData->description,
//            'rideTypes' => $userData->rideType,
            'name' => $userData->firstName . " " . $userData->lastName,
            'email' => $userData->email,
            'location' => $userData->zip . " " . $userData->city,
            'country' => $userData->country,
            'status' => $userData->isActive,
//            'profileImage' => $userData->profileImage
        ];
        return $user;
    }


    public function verifyUser($data)
    {

        $user = User::where('email',$data['email'])->first();

        if (!$user) {
            return [
                "status" => ErrorConstants::INVALID_USERS,
                "message" => "Invalid credential"
            ];

        }else if($user->exists()){
           
            return [
                "status" => ErrorConstants::INVALID_PASSWORD,
                "message" => __('ApiLang.login.invalidMatch.password')
            ];
    
        }else{

            return [
                "status" => ErrorConstants::INVALID_USERNAME,
                "message" =>'Email doesn\'t exist'
            ];

        }

    }

}