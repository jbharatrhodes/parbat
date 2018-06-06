<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vdcInfo;
use Session;
class Vdcs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vdcList = vdcInfo::all();
        return view('admin.vdc.viewVdc', compact('vdcList'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function editVdc($id)
    {
        $vdc = vdcInfo::find($id);
        return view ('admin.vdc.editVdc', compact('vdc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateVdc(Request $request, $id)
    {
        $vdc = vdcInfo::find($id);
        $vdc->vdcName = $request->vdcName;
        $vdc->vdcInfo = $request->vdcDesc;
        $vdc->save();
        Session::flash('success', 'Successfully edited the Vdc');
        return redirect()->Route('vdcs.vdclist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteVdc($id)
    {
        $vdc = vdcInfo::find($id);
        $vdc->delete();
        Session::flash('success', 'Successfully Deleted the Vdc');
        return redirect()->Route('vdcs.vdclist');
    }
}
