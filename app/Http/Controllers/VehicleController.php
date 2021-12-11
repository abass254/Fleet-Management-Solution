<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Exception;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $vehicles = Vehicle::get();

        return view('vehicle.vehicle', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

            $request->validate([
                'name' => 'required',
                'year' => 'required',
                'selling_price' => 'required',
                'km_driven' => 'required',
                'fuel' => 'required',
                'engine' => 'required',
                'seller_type' => 'required',
                'transmission' => 'required',
                'owner' => 'required',
                'colour' => 'required',
                'mileage' => 'required',
                'max_power' => 'required',       
                'torque' => 'required',       
                'seats' => 'required',       
                'colour' => 'required',
            ]);

            // '', ''  ,  '',   '' ,  ''   , '', ''  ,  ''  , '' ,'' , ''  , ''  ,''  , 'image', ''
            // '', ''  ,  '',   '' ,  ''   , '', ''  ,  ''  , '' ,'' , ''  , ''  ,''  , 'image', ''

            $vehicle = new Vehicle();
            $vehicle->name = $request->name;
            $vehicle->year = $request->year;
            $vehicle->selling_price = $request->selling_price;
            $vehicle->km_driven = $request->km_driven;
            $vehicle->fuel = $request->fuel;
            $vehicle->seller_type = $request->seller_type;
            $vehicle->transmission = $request->transmission;
            $vehicle->owner = $request->owner;
            $vehicle->mileage = $request->mileage;
            $vehicle->engine = $request->engine;          
            $vehicle->max_power = $request->max_power;
            $vehicle->torque = $request->torque;
            $vehicle->seats = $request->seats;
            $vehicle->colour = $request->colour;
            $vehicle->status = 0;

            if($request->hasFile('image')){

                $file = $request->file('image');
                $ext = $file->guessExtension();
                $file_name = time().'_'. $request->name . '.' . $ext;
                $file->move('images/', $file_name);
                $vehicle->image = $file_name;

               

            }

            $res = $vehicle->save();

            if(empty($res)){


                Alert::error('Vehicle not added. Please check your inputs');

                return redirect()->back();
                
                
            }

            else{

                Alert::success('Vehicle added successfully, Please assign it to a driver for it to go on a trip');

                return redirect()->back();
            }
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

        $vehicle = Vehicle::FindOrFail($id);


        return view('vehicle.edit', compact('vehicle'));
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





        $vehicle = Vehicle::FindOrFail($id);

        $vehicle->name = $request->name;
            $vehicle->year = $request->year;
            $vehicle->selling_price = $request->selling_price;
            $vehicle->km_driven = $request->km_driven;
            $vehicle->fuel = $request->fuel;
            $vehicle->seller_type = $request->seller_type;
            $vehicle->transmission = $request->transmission;
            $vehicle->owner = $request->owner;
            $vehicle->mileage = $request->mileage;
            $vehicle->engine = $request->engine;          
            $vehicle->max_power = $request->max_power;
            $vehicle->torque = $request->torque;
            $vehicle->seats = $request->seats;
            $vehicle->colour = $request->colour;
            $vehicle->status = 0;

            if($request->hasFile('image')){

                $file = $request->file('image');
                $ext = $file->guessExtension();
                $file_name = time().'_'. $request->model . '.' . $ext;
                $file->move('images/', $file_name);
                $vehicle->image = $file_name;

               

            }

            $res = $vehicle->save();

            if(empty($res)){


                Alert::error('Vehicle not updated. Please check your inputs!!!');

                return redirect()->back();
                
                
            }

            else{

                Alert::success('Vehicle updated successfully!!!');

                return redirect()->back();
            }
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
}
