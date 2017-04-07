<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Post;
use App\User;
use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
       Post::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
      //  //
        /*$permissions = Permission::with('roles')->get();
        
        foreach ($permissions as $permission) {
          Gate::define($permission->name, function(User $user) use ($permission){
              
            return $user->hasPermission($permission);
          });
        }*/
        
        /*Gate::before(function(User $user, $ability){
            
        if($user->hasAnyRoles('adm')){
            return true;
        }
        });
            */
}
}