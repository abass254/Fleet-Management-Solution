<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignAsset;
use App\Models\Asset;
use App\Models\Staff;
use RealRashid\SweetAlert\Facades\Alert;

class IssueAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staff = Staff::all();
        $asset = Asset::all();

        return view('view_assigned_assets', compact('staff','asset'));

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $staff = Staff::all();
         $asset = Asset::where('status', '=', '0')->get();

         return view('assign_asset', compact('staff', 'asset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'', '', '', 'status', ''
        //'', '', '', 'status', ''

        $staf = new AssignAsset();
        $staf->staff = $request->staff ;
        $staf->item = $request->item ;
        $staf->date_issued = $request->date_issued ;
        $staf->comments = $request->comments;
        $staf->status = 1;
        $staf->save();

        $item = $staf->item;

        $asset = Asset::where('id', '=', $item)->first();
        $asset->status = 1;
        $asset->save();

        Alert::success('Equipment successfully Assigned');

        return redirect()->back();






    }


    // public function returnAsset($id){

    //     $asset = Asset::where('id', '=', $id);
    //     $asset->status = 0;
    //     $asset->save();

    //     Alert::success('Equipment successfully returned');


    //     return redirect()->back();
    // }

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
