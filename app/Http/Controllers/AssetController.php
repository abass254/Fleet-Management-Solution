<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\AssignAsset;
use RealRashid\SweetAlert\Facades\Alert;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $asset = Asset::latest()->get();

        return view('view_assets', compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('add_asset');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $asset = new Asset();
        $asset->item_code = $request->item_code;
        $asset->item_name = $request->item_name;
        $asset->item_desc = $request->item_desc;
        $asset->item_type = $request->item_type;
        $asset->status = 0;
        $asset->date_purchase = $request->date_purchase;
        $asset->purchase_price = $request->purchase_price;
        $asset->save();

        Alert::success('Equipment added successfully');

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

        $asset = Asset::FindOrFail($id);

        return view('edit_asset');
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

        $asset = Asset::FindOrFail($id);
        $asset->item_code = $request->item_code;
        $asset->item_name = $request->item_name;
        $asset->item_desc = $request->item_desc;
        $asset->item_type = $request->item_type;
        $asset->status = 0;
        $asset->date_purchase = $request->date_purchase;
        $asset->purchase_price = $request->purchase_price;
        $asset->save();

        Alert::success('Equipment updated successfully');

        return redirect()->back();

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


    public function assetReport(){

         //$assets = Asset::select(DB::raw('count(vehicle) as total'),DB::raw("vehicle"))->where('status', '!=', '0')->groupBy('vehicle')->get();

        $assets = AssignAsset::latest()->where('status', '=', '1')->get();

        return view('trip.asset_report', compact('assets'));


    }
}
