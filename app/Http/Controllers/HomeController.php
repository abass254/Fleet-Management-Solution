<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Staff;
use App\Models\Vehicle;
use App\Models\Asset;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trips = count(Trip::all());
        $veh = count(Vehicle::all());
        $staff = count(Staff::all());
        $asset = count(Asset::all());
        //Alert::toast('Hello', 'success');
        return view('home', compact('trips', 'veh', 'staff', 'asset'));
    }
}
