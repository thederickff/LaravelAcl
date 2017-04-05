<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
class RoleController extends Controller
{
    //
    protected $role;
    
    function __construct(Role $role) {
        $this->role = $role;
    }

    
    
    public function index(){
        $roles = $this->role->paginate(3);
        
        return view('painel.roles.index', compact('roles'));
    }
    public function edit($id){
        return $id;
    }
    
    public function delete($id){
        return $id;
    }
    
    public function permission($id){
        
        $role = $this->role->find($id);
        
        $permissions = $role->permissions;
        return view('painel.roles.permissions', compact('role', 'permissions'));
    }
}
