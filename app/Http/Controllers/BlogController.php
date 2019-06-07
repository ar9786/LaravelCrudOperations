<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\BlogComments;
use DB;

class BlogController extends Controller
{
    public function __construct(Request $request){
        DB::enableQueryLog();
        //dd( DB::getQueryLog() );
    }
    public function index(Request $request){
        $blogData = Blogs::where(['status'=>1])->orderBy('created_at', 'desc')->get()->toArray();
        $data = array("blogData"=>$blogData);
    	return view('blog',compact('data'));
    }
    public function blogDetail($slug){
        $blogData = Blogs::
        join('users', 'users.id', '=', 'blogs.user_id')
        ->select('blogs.*','users.id as users_id','users.email','users.first_name')
        ->where(['blogs.status'=>1,'blog_url'=>$slug])
        ->get()->first()->toArray();
        if($blogData){
        $metaContent = array("title"=>$blogData['title'],"description"=>$blogData['description'],"keywords"=>$blogData['keyword']);
        
        $comment = BlogComments::
        join('users', 'users.id', '=', 'blog_comments.user_id')
        ->where(['blog_comments.status'=>1,'posted_id'=>0,'blog_id'=>$blogData['id']])
        ->get()->toArray();
        if($comment){
        foreach($comment as $val){
           
            $nestedCmt = BlogComments::
            join('users', 'users.id', '=', 'blog_comments.user_id')
            ->where(['blog_comments.status'=>1,'posted_id'=>$val['commt_id'],'blog_id'=>$val['id']])->get()->toArray();
            if($nestedCmt){
                $val["nested"] = $nestedCmt;
            }else{
                $val["nested"] = NULL;
            }
            $comments[] = $val;
        }}else{
            $comments = [];
        }
		$data = array("metaContent"=>$metaContent,"blogData"=>$blogData,"comments"=>$comments);
        return view('blogDetail',compact('data'));
        }
        else{
        return view('errorPage');
        }
    }
    public function postSubmission(Request $request){
        $user_id = Auth::user()->id;
        $get_title = strtolower($request->title);
        $match = '/[^a-z0-9]+/';
        $replace = '-';
        $url = preg_replace($match, $replace, $get_title);
        $blog_url = trim($url,'-');
        $request->blog_url = $blog_url;
        
        $data_array = array("title"=>$request->title,"keyword"=>$request->keyword,"description"=>$request->description,"content"=>$request->content,"user_id"=>$user_id,"blog_url" =>$blog_url);
        $validator = Validator::make(collect($request)->toArray(), [
            'title' => 'required|unique:blogs|max:200',
            'blog_url' => 'required|unique:blogs|max:200',
        ]);
        if ($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }
        Blogs::create($data_array);
    	return Redirect::back();
    }
    public function blogManagment(Request $request){
        $blogData = Blogs::where(['status'=>1])->orderBy('created_at', 'desc')->get()->toArray();
        $data = array("blogData"=>$blogData);
        return view('admin/blogManagment',compact( 'data'));
    }
    public function blogPreview($slug){
        $blogData = Blogs::
        join('users', 'users.id', '=', 'blogs.user_id')
        ->where(['blogs.id'=>$slug])
        ->get()->first()->toArray();
        if($blogData){
        $metaContent = array("title"=>$blogData['title'],"description"=>$blogData['description'],"keywords"=>$blogData['keyword']);
		$data = array("metaContent"=>$metaContent,"blogData"=>$blogData);
        return view('admin/blogPreview',compact('data'));
        }
        else{
        return view('errorPage');
        }
    }
    public function blogComments(Request $request){
        $msg = $request->msg;
        $user_id = Auth::user()->id;
        $blog_id = $request->blog_id;
        if($request->has('posted_id')){
            $posted_id = $request->posted_id;
        }else{
            $posted_id = 0;
        }
        $data_array = array("msg"=>$msg,"user_id"=>$user_id,"blog_id"=>$blog_id,"posted_id"=>$posted_id);
        BlogComments::create($data_array);
        if($data_array){
            echo 1;
        }else{
            echo 0;
        }
    }
}
