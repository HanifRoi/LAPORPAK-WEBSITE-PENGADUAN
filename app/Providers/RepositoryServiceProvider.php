<?php

namespace App\Providers;

use App\Interface\AuthRepositoryInterface;
use App\Interfaces\ResidentRepositoryInterface;
use App\Models\Resident;
use App\Repositories\AuthRepository;
use App\Repositories\ResidentRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        $this->app->bind(ResidentRepositoryInterface::class, ResidentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
