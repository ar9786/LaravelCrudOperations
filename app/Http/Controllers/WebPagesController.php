<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function whoWeAre(Request $request){
		
		//dd($fetch_clubs);
		//dd( DB::getQueryLog() );
		$fetch_clubs = array('1','2','3','4','5','6','7','8','9');
		return view('whoWeAre',compact('fetch_clubs'));
    }
    public function howItWorks(Request $request){
		
		//dd($fetch_clubs);
		//dd( DB::getQueryLog() );
		$fetch_clubs = array('1','2','3','4','5','6','7','8','9');
		return view('howItWorks',compact('fetch_clubs'));
    }
    public function stSquare(Request $request){
		
		//dd($fetch_clubs);
		//dd( DB::getQueryLog() );
		$fetch_clubs = array('1','2','3','4','5','6','7','8','9');
		return view('stSquare',compact('fetch_clubs'));
    }
}
