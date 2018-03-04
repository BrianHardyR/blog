<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\post;

class PostsController extends Controller
{
    //
    public function index(){
    	
    	$Posts=post::all();
    	return view('posts.index', compact('Posts'));
    }

    public function show(post $post){

    	//$Post=post::find($id);
    	return view('posts.show',compact('post'));

    }
}
