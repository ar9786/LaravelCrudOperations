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
use Session;

class AdminService 
{
    public function checkUser($request){
        $user_id = $request->session()->get('authkey');
        return $user_id;
    }
    function ajaxListing($request,$role){
        // Filter and Search
        if($request->has('dropdw_value') && $request->has('search_value')){
            $colmn_name = $request->dropdw_value;
            $colmn_value = $request->search_value;
            return $athletes = User::where([$colmn_name => $colmn_value])->paginate(1);
        }
        //Status Active/Inactive
        if($request->has('id') && $request->has('value')){
            $id = $request->id;
            $value = $request->value;
            if( $request->value == 1){
                User::where(['id' => $id,'status' => 1])->update(['status' => 0]);
                echo 0;
            }else{
                User::where(['id' => $id,'status' => 0])->update(['status' => 1]);
                echo 1;
            }
            die;
        }
        //View Profoile
        if($request->has('id') && $request->has('viewProfile')){
            $id = $request->id;
            $athletes = User::where(['id' => $id])->get();
            if( $athletes !== NULL){
                echo json_encode($athletes);
            }else{
                echo "ID not exist";
            }
            die;
        }
        if($role == 3){
        return $athletes = User::where(['role'=>GlobalConstants::ATHLETE_ROLE])->orderBy('created_at', 'desc')->paginate(1);
        }
        if($role == 2){
        return $athletes = User::where(['role'=>GlobalConstants::COMPANY_ROLE])->orderBy('created_at', 'desc')->paginate(1);
        }
    }
}