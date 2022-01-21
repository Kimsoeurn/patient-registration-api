<?php

namespace App\Providers;

use App\Contracts\Repositories\IPatientRepository;
use App\Contracts\Repositories\IUserRepository;
use App\Contracts\Services\IPatientService;
use App\Contracts\Services\IUserService;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use App\Services\PatientService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(IUserRepository::class, UserRepository::class);

        $this->app->bind(IPatientService::class, PatientService::class);
        $this->app->bind(IPatientRepository::class, PatientRepository::class);
    }
}
