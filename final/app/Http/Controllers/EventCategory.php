<?php

namespace App\Http\Controllers;

use App\Category;
use App\vdcInfo;
use App\Events;
use Session;
use App\Overseas;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Image;
use File;


class EventCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DB::table('event')
            ->select('event.id as id', 'eventName', 'eventDesc','vdcName', 'ocountry')
            ->leftJoin('Overseas', 'event.overseasid', '=', 'Overseas.id')
            ->leftJoin('vdcInfo', 'event.vdcid', '=', 'vdcInfo.id')
            ->orderBy('event.created_at', 'desc')
            ->paginate(20);
        //return $news;
        return view ('admin.event.index', compact('event'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vdc = vdcInfo::all();
        $overseas = Overseas::all();
        return view ('admin.event.create', compact('vdc', 'overseas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getResizeImage()
    {
        return view('files.resizeimage');
    }
    public function addEvent(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'title'=>'required',
            'eventDesc'=>'required',
            'datepicker1'=>'required'

        ]);

        $overseasId = $request->country ==1 ? $request->overseas_id: 0;
        $vdcId = $request->country ==0 ? $request->vdc_id: 0;
        $feature = $request->feature;
        $featured_new_name = time().$feature->getClientOriginalName();

        $feature->move('uploads/event', $featured_new_name);

        $datepicker= substr(Carbon::parse($request->datepicker1),0,-8). date('H:i:s');
        $events = Events::create([
            'eventName'=>$request->title,
            'vdcid' =>$vdcId,
            'eventDesc'=>$request->eventDesc,
            'overseasid'=>$overseasId,
            'eventDate'=> $datepicker,
            'eventLocation' =>$request->location,
            'eventContact' =>$request->contact,
            'eventTime' =>$request->time,
            'image'=> 'uploads/event/'.$featured_new_name,
        ]);
        return redirect()->Route('event.display');
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
        $news=news::find($id);
        $category=Category::all();
        $vdc = vdcInfo::all();
        return view ('admin.news.edit', compact('news', 'category','vdc'));
    }
    public function unpublish($id){

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
        // dd($request->all());
        $this->validate($request, [
            'title'=>'required',
            'newsDesc'=>'required',
            'category_id'=>'required',
            'vdc_id'=>'required'

        ]);
        $news = news::find($id);
        if($request->feature) {
            $feature = $request->feature;
            $featured_new_name = time() . $feature->getClientOriginalName();
            $destinationPath = ('uploads/news/thumb/' . $featured_new_name);
            $thumb_img = Image::make($feature->getRealPath())->resize(197, 93);
            $thumb_img->text('©ParbatNepal.com', 150, 90, function ($font) {
                $font->color(array(246, 148, 29, 0.5));
                $font->size(24);
                $font->align('center');
                $font->valign('bottom');
                $font->angle(45);
            });
            $thumb_img->save($destinationPath);
            $destinationPath1 = ('uploads/news/thumb_medium/' . $featured_new_name);
            $thumb_img1 = Image::make($feature->getRealPath())->resize(380, 180);
            $thumb_img1->text('©ParbatNepal.com', 360, 170, function ($font) {
                $font->color(array(246, 148, 29, 0.5));
                $font->size(24);
                $font->align('center');
                $font->valign('bottom');
                $font->angle(120);
            });
            $thumb_img1->save($destinationPath1);


            $feature->move('uploads/news', $featured_new_name);
            File::delete('uploads/news/'.$news['feature'], 'uploads/news/thumb_medium/'.$news['feature_medium'], 'uploads/news/thumb/'.$news['feature_small']);
            @unlink($news['feature']);
            @unlink($news['feature_medium']);
            @unlink($news['feature_small']);
            $news->feature ='uploads/news/'.$featured_new_name;

            $news->feature_small ='uploads/news/thumb/'.$featured_new_name;
            $news->feature_medium ='uploads/news/thumb_medium/'.$featured_new_name;
        }



        $news->newsTitle =$request->title;
        $news->vdcInfo_id =$request->vdc_id;
        $news->newsDesc=$request->newsDesc;
        $news->category_id=$request->category_id;
        $news->newsBy='';
        $news->published=0;
        $news->updated_at=new \DateTime();



        $news->created_at=$request->created;
        $news->save();
        return redirect()->Route('news.display');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $news = news::find($id);

        @unlink($news['feature']);
        @unlink($news['feature_medium']);
        @unlink($news['feature_small']);
        $news->delete();
        Session::flash('success', 'News successfully deleted');
        return redirect()->Route('news.display');
    }
}
