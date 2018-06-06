<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Overseas;

use Session;

class OverSeasController extends Controller
{
    public function index()
    {
        $overseas =Overseas::all();
        return view('admin.overseas.index', compact('overseas'));
    }
    public function create()
    {
        return view('admin.overseas.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'country'=>'required'
        ]);
        $overseas = new Overseas();
        $overseas->	ocountry = $request->country;
        $overseas->	oinfo = $request->oinfo;
        $overseas->save();
        Session::flash('success','Created the new Country');
        return redirect()->Route('overseas');
    }
    public function delete($id)
    {
        $overseas=Overseas::find($id);
        $overseas->delete();
        Session::flash('success', 'Country was deleted successfully');
        return redirect()->Route('overseas');
    }
    public function edit($id)
    {
        $overseas=Overseas::find($id);
        return view ('admin.overseas.edit', compact('overseas'));
    }
    public function update(Request $request, $id)
    {
        $overseas=Overseas::find($id);
        $overseas->ocountry = $request->ocountry;
        $overseas->oinfo = $request->oinfo;
        $overseas->save();
        Session::flash('success', 'Successfully edited the Coungtry');
        return redirect()->Route('overseas');
    }
}
