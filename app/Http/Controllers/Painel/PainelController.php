<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Permission;
use App\Role;
class PainelController extends Controller
{
    //
   
    public function index(){
        
        $totalUsers       = User::count();
        $totalPosts       = Post::count();
        $totalPermissions = Permission::count();
        $totalRoles       = Role::count();
        
        
        return view('painel.home.index', compact('totalUsers', 'totalPosts', 'totalPermissions', 'totalRoles'));
    }
}
