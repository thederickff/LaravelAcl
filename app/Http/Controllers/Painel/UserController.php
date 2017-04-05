<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    //
    protected $user;
    
    function __construct(User $user) {
        $this->user = $user;
    }

    
    
    public function index(){
        $users = $this->user->paginate(3);
        
        return view('painel.users.index', compact('users'));
    }
    public function edit(){
        
    }
}
