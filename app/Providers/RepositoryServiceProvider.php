<?php

namespace Site\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Site\Repositories\CategoryRepository',
            'Site\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\ProductRepository',
            'Site\Repositories\ProductRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\ClientRepository',
            'Site\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\OrderRepository',
            'Site\Repositories\OrderRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\OrderItemRepository',
            'Site\Repositories\OrderItemRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\UserRepository',
            'Site\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\CupomRepository',
            'Site\Repositories\CupomRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\CompanyRepository',
            'Site\Repositories\CompanyRepositoryEloquent'
        );

        $this->app->bind(
            'Site\Repositories\CompanyUserRepository',
            'Site\Repositories\CompanyUserRepositoryEloquent'
        );
    }
}
