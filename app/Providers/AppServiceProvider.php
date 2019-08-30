<?php

namespace App\Providers;

use App\Http\Repository\Contracts\CarRepositoryInterface;
use App\Http\Repository\Contracts\MotobikeRepositoryInterface;
use App\Http\Repository\Contracts\RepositoryInterface;
use App\Http\Repository\Eloquent\CarRepositoryEloquent;
use App\Http\Repository\Eloquent\MotobikeRepositoryEloquent;
use App\Http\Repository\Eloquent\RepositoryEloquent;
use App\Http\Service\Impl\CarService;
use App\Http\Service\Impl\MotobikeService;
use App\Http\Service\Impl\MotobikeServiceInterface;
use App\Http\Service\Impl\Service;
use App\Http\Service\CarServiceInterface;
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
        $this->app->singleton(
            RepositoryInterface::class,
            RepositoryEloquent::class

        );
        $this->app->singleton(
            CarRepositoryInterface::class,
            CarRepositoryEloquent::class
        );
        $this->app->singleton(
            CarServiceInterface::class,
            CarService::class

        );
        $this->app->singleton(
            MotobikeRepositoryInterface::class,
            MotobikeRepositoryEloquent::class
        );
        $this->app->singleton(
            MotobikeServiceInterface::class,
            MotobikeService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
