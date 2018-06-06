<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tags;
use Session;

class tagController extends Controller
{
    public function index()
    {
        $tag =tags::all();
        return view('admin.tags.index', compact('tag'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'tags'=>'required'
        ]);
        $tags = new tags();
        $tags->tags = $request->tags;
        $tags->save();
        Session::flash('success','Created the new tags');
        return redirect()->Route('tags');
    }
    public function delete($id)
    {
        $tags=tags::find($id);
        $tags->delete();
        Session::flash('success', 'Tags was deleted successfully');
        return redirect()->Route('tags');
    }
}
