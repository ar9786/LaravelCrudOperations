<?php

namespace App\Http\Middleware;
use Closure;
use App\Services\UserService; 
use App\Constants\GlobalConstants;
use Session;

class CheckUserSession
{
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function handle($request,Closure $next)
    {
        $user_id = Session::get('authData')['userId'];
        if(!empty($user_id)){
        $user_data = $this->userService->getLoginData( $user_id );
        if ($user_data['role'] == GlobalConstants::ADMIN_ROLE || $user_data['role'] == GlobalConstants::COMPANY_ROLE || $user_data['role'] == GlobalConstants::ATHLETE_ROLE){
            return $next($request);
        }}
        return redirect('/');
    }
}