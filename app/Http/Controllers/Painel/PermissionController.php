<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
class PermissionController extends Controller
{
    //
    protected $permission;
    
    function __construct(Permission $permission) {
        $this->permission = $permission;
    }

    
    
    public function index(){
        $permissions = $this->permission->paginate(3);
        
        return view('painel.permissions.index', compact('permissions'));
    }
    public function edit(){
        
    }
}
