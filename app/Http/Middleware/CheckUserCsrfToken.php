<?php

namespace App\Http\Middleware;
use Closure;
use App\Services\UserService; 
use App\Constants\GlobalConstants;
use Session;

class CheckUserCsrfToken
{
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function handle($request,Closure $next)
    {
        if (Request::ajax()) 
        {
           
            if (Session::token() !== Request::header('csrftoken')) 
            {
                // Change this to return something your JavaScript can read...
                throw new Illuminate\Session\TokenMismatchException;
            }else{
                return $next($request);
            }
        }
        return redirect('/');
    }
}