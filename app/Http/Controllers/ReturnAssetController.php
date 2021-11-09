<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReturnAsset;
use App\Models\Asset;
use App\Models\Staff;

class ReturnAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $staffs = Staff::all();
        $assets = Asset::where('status', '=', '1')->get();
        return view('return_asset', compact('assets', 'staffs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'asset', '', '', '', ''
       // '', '', '', ''


        $ret = new ReturnAsset();
        $ret->asset = $request->asset;
        $ret->date_returned=$request->date_returned;
        $ret->comments=$request->comments; 
        $ret->condition=$request->condition;
        $ret->collected_by=$request->collected_by;
        $ret->save();


        $item = $ret->asset;

        $asset = Asset::where('id', '=', $item)->first();
        $asset->status = 0;
        $asset->save();


        return redirect()->back();




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
}
