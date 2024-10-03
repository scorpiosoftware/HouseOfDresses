<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Schema as FacadesSchema;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;
use Nette\Schema\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FacadesSchema::defaultStringLength(191);
        Cashier::useCustomerModel(User::class);
        Cashier::calculateTaxes();
    }
}
