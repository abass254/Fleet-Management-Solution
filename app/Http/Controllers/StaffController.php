<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use RealRashid\SweetAlert\Facades\Alert;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //'full_name', 'contact', 'role', 'status', 'gender'

        $staffs = Staff::latest()->get();

        return view('view_staffs', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view ('add_staff');
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
        $staff = new Staff();
        $staff->full_name = $request->full_name;
        $staff->contact = $request->contact;
        $staff->role = $request->role;
        $staff->gender = $request->gender;
        $staff->status = 1;
        $staff->save();

        Alert::success('Staff added successfully');

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

        $staff = Staff::FindOrFail($id);
        $staff->full_name = $request->full_name;
        $staff->contact = $request->contact;
        $staff->role = $request->role;
        $staff->gender = $request->gender;
        $staff->status = 1;
        $staff->save();

        Alert::success('Staff updated successfully');

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
}
