<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isSuper',function ($user){
            if($user->role==1 && $user->access==1){
                return true;
            }else{
                return false;
            }
        });
        Gate::define('isConsultant',function ($user){
            if($user->role==2 && $user->access==1){
                return true;
            }else{
                return false;
            }
        });
        Gate::define('isStudent',function ($user){
            if($user->role==3 && $user->access==1){
                return true;
            }else{
                return false;
            }
        });

    }
}
