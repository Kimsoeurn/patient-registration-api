<?php

namespace App\Providers;

use App\Contracts\Repositories\ICommuneRepository;
use App\Contracts\Repositories\IDistrictRepository;
use App\Contracts\Repositories\IPatientRepository;
use App\Contracts\Repositories\IProvinceRepository;
use App\Contracts\Repositories\IUserRepository;
use App\Contracts\Repositories\IVillageRepository;
use App\Contracts\Services\ICommuneService;
use App\Contracts\Services\IDistrictService;
use App\Contracts\Services\IPatientService;
use App\Contracts\Services\IProvinceService;
use App\Contracts\Services\IUserService;
use App\Contracts\Services\IVillageService;
use App\Repositories\CommuneRepository;
use App\Repositories\DistrictRepository;
use App\Repositories\PatientRepository;
use App\Repositories\ProvinceRepository;
use App\Repositories\UserRepository;
use App\Repositories\VillageRepository;
use App\Services\CommuneService;
use App\Services\DistrictService;
use App\Services\PatientService;
use App\Services\ProvinceService;
use App\Services\UserService;
use App\Services\VillageService;
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

        $this->app->bind(IDistrictService::class, DistrictService::class);
        $this->app->bind(IDistrictRepository::class, DistrictRepository::class);

        $this->app->bind(ICommuneService::class, CommuneService::class);
        $this->app->bind(ICommuneRepository::class, CommuneRepository::class);

        $this->app->bind(IVillageService::class, VillageService::class);
        $this->app->bind(IVillageRepository::class, VillageRepository::class);
    }

    public function boot()
    {
        //
    }
}
