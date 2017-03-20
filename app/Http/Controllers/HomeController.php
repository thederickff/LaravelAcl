<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{

    protected $post;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Post $p)
    {
        $this->post = $p;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->post->paginate(5);

        return view('home', compact('posts'));
    }

    public function edit($id){


        $post = $this->post->find($id);

        //$this->authorize('edit-post', $post);

        if(Gate::denies('edit-post', $post)){
            abort(403, 'Unauthorized');
        }

        return view('post.edit', compact('post'));
    }
}
