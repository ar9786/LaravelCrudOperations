<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Newsletters;
use DB;

class SubscribeNewsController extends Controller
{
    public function index(Request $request){

        $validator = Validator::make(collect($request)->toArray(), [
            'email' => 'required|email|unique:newsletters,email|max:90',
        ]);
        if ($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
           // Newsletters::create(['email'=>$request->email]);
            return  Redirect::back()->withInput()->with('newsletter', 'You have been subscribed');
        }
    }
    public function show(Request $request){
        echo "Work is in progress";exit;
        return view('showNewsletter');
    }
}
