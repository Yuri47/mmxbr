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

    public function createPost(Request $request) {

      // $extension = $request->file('photo')->extension();

       $file = $request->file('photo')->store('/img/postImages');

        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $url = str_slug($title, '-');

        $postagem = [
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'url' => $url,
            'image' => $file
        ];

        Post::create($postagem);
         

        return $postagem;


    }





}


