<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\Role' => 'App\Policies\RolePolicy',
        'App\Permission' => 'App\Policies\PermissionPolicy',
        'App\Dependence' => 'App\Policies\DependencePolicy',
        'App\Person' => 'App\Policies\PersonPolicy',
        'App\PersonDependence' => 'App\Policies\PersonDependencePolicy',
        'App\Report' => 'App\Policies\ReportPolicy',
        'App\Search' => 'App\Policies\SearchPolicy',
        'App\SearchDependence' => 'App\Policies\SearchDependencePolicy',
        'App\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
