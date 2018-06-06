<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DCategory;
use Session;
class CatDirectory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DCategory::all();
        return view ('admin.directory.viewCategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.directory.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'dcName'=>'required'
        ]);
        $category = new DCategory();
        $category->dcName = $request->dcName;
        $category->save();
        Session::flash('success', 'Successfully aded the category');
        return redirect()->Route('dCategory.categories');
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
        $category = DCategory::find($id);
        return view ('admin.directory.editCategory', compact('category'));
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
        $this->validate($request, [
            'dcName'=>'required'
        ]);
        $category = DCategory::find($id);
        $category->dcName = $request->dcName;
        $category->save();
        Session::flash('success', 'Successfully edited the category');
        return redirect()->Route('dCategory.categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = DCategory::find($id);
        $category->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect()->Route('dCategory.categories');
    }
}
