<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TipsController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    //
    public function newpost() {
    	return view('adminlte::newpost', ['teste' => 'teste']);
    }

    public function showAllTips() {

        $posts = Post::all();



        return view ('pages.dicas', ['posts' => $posts, 'teste' => 'teste']);
    }





}
