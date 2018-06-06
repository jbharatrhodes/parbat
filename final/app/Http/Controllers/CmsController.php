<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cms;
use App\Overseas;
use App\vdcInfo;
use Session;;

class CmsController extends Controller
{
    public function index()
    {
        $cms =Cms::all();
        return view('admin.cms.index', compact('cms'));
    }
    public function create()
    {
        $vdc = vdcInfo::all();
        $overseas= Overseas::all();
        return view('admin.cms.create', compact( 'vdc','overseas'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'type'=>'required'
        ]);
        $cms = new Cms();
        $vdc = $request->vdc > 0 ? $request->vdc:0;
        $oversea = $request->overseas > 0 ? $request->overseas:0;
        $cms->cmsName = $request->name;
        $cms->cmsDesc = $request->desc;
        $cms->cmsType = $request->type;
        $cms->cmsVdc = $vdc;
        $cms->cmsOverseas = $oversea;
        $cms->cmsKeyword = $request->kyword;
        $cms->cmsMetaDesc = $request->metadesc;
        $cms->save();
        Session::flash('success','Created the new Content');
        return redirect()->Route('cms');
    }
    public function delete($id)
    {
        $cms=Cms::find($id);
        $cms->delete();
        Session::flash('success', 'Content was deleted successfully');
        return redirect()->Route('cms');
    }
    public function edit($id)
    {
        $cms=Cms::find($id);
        return view ('admin.cms.edit', compact('cms'));
    }
    public function update(Request $request, $id)
    {
        $cms=Cms::find($id);
        $vdc = $request->vdc > 0 ? $request->vdc:0;
        $overseas = $request->overseas > 0 ? $request->overseas:0;
        $cms->cmsName = $request->name;
        $cms->cmsDesc = $request->desc;
        $cms->cmsType = $request->type;
        $cms->cmsVdc = $vdc;
        $cms->cmsOverseas = $overseas;
        $cms->cmsKeyword = $request->keyword;
        $cms->cmsMetaDesc = $request->metadesc;
        $cms->save();
        Session::flash('success', 'Successfully edited the Content');
        return redirect()->Route('cms');
    }

}
