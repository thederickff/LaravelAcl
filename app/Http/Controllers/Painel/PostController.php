<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    //
    protected $post;
    
    function __construct(Post $post) {
        $this->post = $post;
    }

    
    
    public function index(){
        $posts = $this->post->paginate(3);
        
         echo Gate::denies('view-post');
        return view('painel.posts.index', compact('posts'));
    }
    public function edit(){
          
    }
}
