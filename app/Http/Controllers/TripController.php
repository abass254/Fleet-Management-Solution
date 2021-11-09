<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Vehicle;
use App\Models\Location;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $trip = new Trip();
        $trip = 'TRP'.time()- 1633701718; //;
        dd($trip);*/


        $trips = Trip::where('status', '=', '0')->get();

        return view('trip.index', compact('trips'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $vehicles = Vehicle::where('status', '=', '1')->get();
        $locations = Location::where('status', '=', '1')->get();
        return view('trip.create', compact('vehicles', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'', '', '', '', '', '', 'status', ''
        //'trip_code', '', '', '', '', '', '', ''

        $trip = new Trip();
        $trip->trip_code = 'TRP'.time()- 1633701718;
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->date_of_trip = $request->date_of_trip;
        $trip->return_date = $request->return_date;
        $trip->purpose = $request->purpose;
        $trip->status = 0; //waiting for approval;
        $trip->vehicle = $request->vehicle;

        

        $trip->save();



        $vehicle = $trip->vehicle;


        $veh = Vehicle::where('id', '=', $vehicle)->first();
        $veh->status = 4;

        $veh->save();


        Alert::success('Trip has been made successfully. Please wait for approval from the administrator');

        return redirect()->back()->with('success', 'Successfully made. Please wait for approval');
        
        //dd($trip->trip_code);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $trip = FindOrFail($id);

        return view('trip.edit', compact('trip'));





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $trip = Trip::FindOrFail();
        $trip->trip_code = $request->trip->code;
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->date_of_trip = $request->date_of_trip;
        $trip->return_date = $request->return_date;
        $trip->purpose = $request->purpose;
        $trip->status = 0; //waiting for approval;
        $trip->vehicle = $request->vehicle;

        $trip->save();

        return redirect()->back()->with('success', 'Successfully updated. Please wait for approval');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function approveTrips($id){
        $trips = Trip::FindOrFail($id);
        $trips->status = 1;


        $trips->save();

        $vehicle = $trips->vehicle;

        $veh = Vehicle::where('id', '=', $vehicle)->first();
        $veh->status = 2;

        $veh->save();


        Alert::success('Trip has been successfully approved');

        return redirect()->back()->with('success', 'Successfully Approved.');

    }

    public function endTrips($id){
        $trips = Trip::FindOrFail($id);
        $trips->status = 2;


        $trips->save();

        $vehicle = $trips->vehicle;

        $veh = Vehicle::where('id', '=', $vehicle)->first();
        $veh->status = 1;

        $veh->save();

        return redirect()->back()->with('success', 'Successfully Approved.');

        Alert::success('Trip has been successfully terminated');

    }





    public function tripHistory(){

        $trips = Trip::where('status', '=', '1')->get();

        return view('trip.trip_history', compact('trips'));
    }


    public function tripReport(){

        // $trips_per_car = DB::select(DB::raw("SELECT vehicles.model, count(trips.vehicle) as total FROM trips INNER JOIN vehicles on trips.vehicle = vehicles.id GROUP BY (vehicles.id)"));


        $trips_per_car = Trip::select(DB::raw('count(vehicle) as total'),DB::raw("vehicle"))->where('status', '!=', '0')->groupBy('vehicle')->get();


        //$trips = Trip::latest()->get()->grou;

        //$trips = Trip::where('status', '=', '0')->get();

        $trip_data = "";

        foreach($trips_per_car as $trip){
            $trip_data.=  "['".$trip->vehice->model."',    ".$trip->total."],";
        }

        $chartData = $trip_data;

        return view('trip.trip_report', compact('chartData', 'trips_per_car'));
    }

    //vehicle_name, driver, 
}
