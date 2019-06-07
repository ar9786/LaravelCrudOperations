<?php

namespace App\Http\Middleware;
use Closure;
use App\Services\UserService; 
use App\Constants\GlobalConstants;
use Session;

class CheckAdminSession
{
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function handle($request,Closure $next)
    {
        $user_id = Session::get('authData')['userId'];
        if($user_id == GlobalConstants::ADMIN_ROLE){
        $user_data = $this->userService->getLoginData( $user_id );
        return $next($request);
        }
        return redirect('/');
    }
}