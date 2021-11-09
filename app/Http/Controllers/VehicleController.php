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


        $vehicles = Vehicle::latest()->get();

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
                'brand' => 'required',
                'model' => 'required',
                'vehicle_type' => 'required',
                'purchase_date' => 'required',
                'chassis_no' => 'required',
                'engine_no' => 'required',
                'plate_no' => 'required',
                'insurance_company' => 'required',
                'policy_no' => 'required',
                'colour' => 'required',            
            ]);

            $vehicle = new Vehicle();
            $vehicle->brand = $request->brand;
            $vehicle->model = $request->model;
            $vehicle->vehicle_type = $request->vehicle_type;
            $vehicle->purchase_date = $request->purchase_date;
            $vehicle->chassis_no = $request->chassis_no;
            $vehicle->engine_no = $request->engine_no;
            $vehicle->plate_no = $request->plate_no;
            $vehicle->insurance_company = $request->insurance_company;
            $vehicle->policy_no = $request->policy_no;
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

        $vehicle->brand = $request->brand;
        $vehicle->model = $request->model;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->purchase_date = $request->purchase_date;
        $vehicle->chassis_no = $request->chassis_no;
        $vehicle->engine_no = $request->engine_no;
        $vehicle->plate_no = $request->plate_no;
        $vehicle->insurance_company = $request->insurance_company;
        $vehicle->policy_no = $request->policy_no;
        $vehicle->colour = $request->colour;
        $vehicle->status = 1;

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->guessExtension();
            $file_name = time().'_'. $request->model . '.' . $ext;
            $file->move('images/', $file_name);
            $vehicle->image = $file_name;



        }

        $vehicle->save();

        return redirect()->back()->with('success', 'Successfully updated');

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
