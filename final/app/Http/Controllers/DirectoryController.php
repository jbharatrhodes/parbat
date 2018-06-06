<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DCategory;
use App\vdcInfo;
use App\Directory;
use App\Overseas;
use Session;
use Carbon\Carbon;
use DB;
use Image;
use File;
date_default_timezone_set('Asia/Kathmandu');

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directory = Directory::all();
        return view('admin.directory.index', compact('directory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DCategory::all();
        $vdc = vdcInfo::all();
        $overseas = Overseas::all();
        return view ('admin.directory.create', compact('category', 'vdc', 'overseas'));
    }
    public function getResizeImage()
    {
        return view('files.resizeimage');
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
            'dTitle'=>'required',
            'dType'=>'required',
            'contact'=>'required',
            'newsDesc'=>'required',
            'category_id'=>'required'

        ]);
        var_dump($request->file('feature'));
        $overseasId = $request->country ==1 ? $request->overseas_id: 0;
        $vdcId = $request->country ==0 ? $request->vdc_id: 0;
        $feature = $request->feature;
        $featured_new_name = date('Y-m-d-H:i:s')."-".$feature->getClientOriginalName();
        $destinationPath = ('uploads/directory/thumb/'.$featured_new_name);
        $thumb_img = Image::make($feature->getRealPath())->resize(197, 93);
        $thumb_img->text('©ParbatNepal.com', 150, 90, function($font) {
            $font->color(array(246, 148, 29, 0.5));
            $font->size(24);
            $font->align('center');
            $font->valign('bottom');
            $font->angle(45);
        });
        $thumb_img->save($destinationPath);
        $destinationPath1 = ('uploads/directory/thumb_medium/'.$featured_new_name);
        $thumb_img1 = Image::make($feature->getRealPath())->resize(380, 180);
        $thumb_img1->text('©ParbatNepal.com', 340, 170, function($font) {
            $font->color(array(246, 148, 29, 0.5));
            $font->size(24);
            $font->align('center');
            $font->valign('bottom');
            $font->angle(120);
        });
        $thumb_img1->save($destinationPath1);


        $feature->move('uploads/directory', $featured_new_name);

//
//
//        $featured_new_name = time().$feature->getClientOriginalName();
//        $feature->move('uploads/directory', $featured_new_name);
        $Startdate = Carbon::now();
        $duration = $request->duration;
        $endDate = Carbon::now()->addDays($duration);
        $directory = new Directory();
        $directory->dTitle = $request->dTitle;
        $directory->dInfo = $request->newsDesc;
        $directory->dVdc_id = $vdcId;
        $directory->dCat_id = $request->category_id;
        $directory->dImage = 'uploads/directory/' .$featured_new_name;
        $directory->dImage_medium = 'uploads/directory/thumb_medium/' .$featured_new_name;
        $directory->dImage_small = 'uploads/directory/thumb/' .$featured_new_name;
        $directory->dType = $request->dType;
        $directory->dEmail = $request->email;
        $directory->dTitle = $request->dTitle;
        $directory->dFacebook = $request->facebook;
        $directory->dWebsite = $request->website;
        $directory->dMobile = $request->mobile;
        $directory->dContact = $request->contact;
        $directory->dPhone = $request->dphone;
        $directory->dLocation = $request->dplace;
        $directory->dStarted = $Startdate;
        $directory->dDuration = $duration;
        $directory->dExpiry = $endDate;
        $directory->dcountry = $overseasId;
        $directory->dpaid = $request->dpaid;
        $directory->save();
//        $directory = news::create([
//            'newsTitle'=>$request->title,
//            'vdcInfo_id' =>$request->vdc_id,
//            'newsDesc'=>$request->newsDesc,
//            'category_id'=>$request->category_id,
//            'newsBy'=>'admin',
//            'published'=>'0',
//            'isLatest'=>$latest,
//            'isSlider'=>$slider,
//            'created_at'=> $datepicker,
//            'feature'=>'uploads/news/' . $featured_new_name,
//            'slug'=>str_slug($request->title)
//        ]);
        return redirect()->Route('directory');


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
