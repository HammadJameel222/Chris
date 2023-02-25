<?php

namespace App\Providers;

use App\Interfaces\CategoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Interfaces\ProductInterface;

// use App\Repositories\User\CategoryRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        $this->app->bind(CategoryInterface::class, function () {
            return new \App\Repositories\Admin\CategoryRepository;
        });

        $this->app->bind(ProductInterface::class, function () {
            return new \App\Repositories\Admin\ProductRepository;
        });
        // $this->app->when(ProductController::class)
        //     ->needs(ProductInterface::class)
        //     ->give(function () {
        //         if (true) {
        //             return new \App\Repositories\Admin\ProductRepository;
        //         }
        //         else
        //             return new \App\Repositories\User\ProductRepository;
        //     });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
