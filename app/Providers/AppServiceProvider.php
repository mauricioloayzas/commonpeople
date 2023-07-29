<?php

namespace App\Providers;

use App\Interfaces\ImageRepositoryInterface;
use App\Interfaces\ProjectRepositoryInterface;
use App\Repositories\ImageRepository;
use App\Repositories\ProjectRepository;
use App\Service\ImageService;
use App\Service\ProjectService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(ImageRepositoryInterface::class, ImageRepository::class);

        $this->app->singleton(ProjectService::class,  function($app){
            return new ProjectService(new ProjectRepository());
        });

        $this->app->singleton(ImageService::class,  function($app){
            return new ImageService(new ImageRepository());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
