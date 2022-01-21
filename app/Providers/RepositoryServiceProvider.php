<?php

namespace App\Providers;

use App\Contracts\Repositories\IPatientRepository;
use App\Contracts\Repositories\IProvinceRepository;
use App\Contracts\Repositories\IUserRepository;
use App\Contracts\Services\IPatientService;
use App\Contracts\Services\IProvinceService;
use App\Contracts\Services\IUserService;
use App\Repositories\PatientRepository;
use App\Repositories\ProvinceRepository;
use App\Repositories\UserRepository;
use App\Services\PatientService;
use App\Services\ProvinceService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(IUserRepository::class, UserRepository::class);

        $this->app->bind(IPatientService::class, PatientService::class);
        $this->app->bind(IPatientRepository::class, PatientRepository::class);

        $this->app->bind(IProvinceService::class, ProvinceService::class);
        $this->app->bind(IProvinceRepository::class, ProvinceRepository::class);
    }

    public function boot()
    {
        //
    }
}
