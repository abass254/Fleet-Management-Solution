<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Trip;
use App\Models\Vehicle;
use App\Models\Asset;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer(
            'layouts.navbar', 
            function ($view) {
                $view->with('trips', count(Trip::where('status', '!=' , '0')->orWhereNull('status')->get()));
                $view->with('trips_for_approval', count(Trip::where('status', '=', '0')->get()));
                $view->with('on_going_trips', count(Trip::where('status', '=', '1')->get()));               
                $view->with('unassigned_vehicles', count(Vehicle::where('status', '=', '0')->get()));
                $view->with('total_vehicles', count(Vehicle::all()));
                $view->with('total_assets', count(Asset::all()));
            }
        );
    }
}
