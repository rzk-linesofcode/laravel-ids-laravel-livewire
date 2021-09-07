<?php

namespace App\Providers;

use App\Http\Livewire\ContactIndex;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public function register()
    // {
    //     //
    // }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     //
    // }

    public function register()
    {
        //
    }

    public function boot()
    {
        // Blade::component('contact-index', ContactIndex::class);
    }
}
