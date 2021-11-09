<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Driveh;
use App\Models\User;
use App\Models\Staff;
use RealRashid\SweetAlert\Facades\Alert;

class DrivehController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'full_name', 'contact', 'role', 'status', 'gender'


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vehicles = Vehicle::where('status', '=', '0')->get();
        $staff = Staff::where('status', '=', '1')->get();

        return view('assign_driver', compact('vehicles', 'staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
           

        $driveh = new Driveh();
        $driveh->vehicle = $request->vehicle;
        $driveh->driver = $request->driver;
        $driveh->starting_odometer = $request->starting_odometer;
        $driveh->starting_date = $request->starting_date;
        $driveh->comments = $request->comments;
        $driveh->save();
        $staff = $driveh->driver;
        $veh = $driveh->vehicle;

        $stafff = Staff::where('id', '=', $staff)->first();
        $stafff->status = 2;
        $stafff->save();

        $vehh = Vehicle::where('id', '=', $veh)->first();
        $vehh->status = 1;
        $vehh->save();
        
        


        Alert::success('Vehicle assigned successfully');

        

        return redirect()->back()->with('success', 'Successfully Added');

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


    public function occupyStaff($id){

        $user = Users::FindOrFail($id);
        $user->status == 2;
        $user->save();

        return $user();
    }

    public function occupyVehicle($id){

        $veh = Vehicle::Where('');
        $veh->status == 2;
        $veh->save();

        return $veh;
    }

    public function vacateVehicle($id){
        $veh = Vehicle::FindOrFail($id);
        $veh->status == 1;
        $vah->save();


    }


}
