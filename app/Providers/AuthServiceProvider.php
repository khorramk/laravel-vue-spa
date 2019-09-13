<?php

namespace App\Providers;
use App\Models\Passport\Client;
use App\Models\Passport\Token;
use App\Models\Passport\AuthCode;
use App\Models\Passport\PersonalAccessClient;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();

        Auth::viaRequest('token', function ($request) {
            return User::where('api_token', $request->api_token)->first();
        });
    }
}
