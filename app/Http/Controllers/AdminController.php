<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Services\UserService;
use App\Services\AdminService;
use App\User;
use App\Constants;
use App\Constants\GlobalConstants;
use DB;
use App\SportClub;


class AdminController extends Controller
{
    public function __construct(UserService $userService,AdminService $adminService){
        $this->userService = $userService;
        $this->adminService = $adminService;
       // DB::enableQueryLog();
    }
    public function adminDashboard(Request $request){
        $total_athlete =  User::where(['role'=>2])->count();
        $total_organiztns =  User::where(['role'=>3])->count();
        $total_camps_clnc =  SportClub::where(['camp'=>1])->orwhere(['clinic'=>1])->count();
        $total_tornmts =  SportClub::where(['tournament'=>1])->count();
        $data = array("total_athlete"=>$total_athlete,"total_organiztns"=>$total_organiztns,"total_camps_clnc"=>$total_camps_clnc,"total_tornmts"=>$total_tornmts);
        return view('/admin/dashboard',compact('data'));
    }
    public function athletesListing(Request $request){
        
        $athletes = User::where(['role'=>GlobalConstants::ATHLETE_ROLE])->orderBy('created_at', 'desc')->paginate(1);
        if ($request->ajax()) {
            $athletes = $this->adminService->ajaxListing($request,$role = 3);
            return view('/admin/include/athletLstng', compact('athletes'));
        }
      //  $athletes = User::where(['status'=>1,'role'=>GlobalConstants::ATHLETE_ROLE])->orderBy('created_at', 'desc')->take(10)->get();
        return view('/admin/athletesListing', compact('athletes'));
    }
    public function companiesListing(Request $request){
        $athletes = User::where(['role'=>GlobalConstants::COMPANY_ROLE])->orderBy('created_at', 'desc')->paginate(1);
        if ($request->ajax()) {
            $athletes = $this->adminService->ajaxListing($request,$role = 2);
            return view('/admin/include/athletLstng', compact('athletes'));
        }
        return view('/admin/companiesListing',compact('athletes'));
    }
    
}
