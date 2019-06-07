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

class CheckSession 
{
    public function checkUser($request)
    {
        $user_id = $request->session()->get('authkey');
        return $user_id;
    }
}