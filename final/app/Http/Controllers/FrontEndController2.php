<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Intervention\Image\ImageManager;
$manager = new ImageManager(array('driver' => 'imagick'));
use App\Category;
use App\news;
use App\vdcInfo;
use App\Overseas;
use App\Events;
use App\Cms;
use App\Directory;
use App\DCategory;
use DB;
use App\articles;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FrontEndController2 extends Controller
{

    public function index(){
        $dateToday = Carbon::now();

        $directory = DB::select('SELECT count(directory.id) as total,dc.dcName as name  FROM
(SELECT * FROM directoryCategory) as dc
LEFT JOIN directory  On directory.dCat_id=dc.id and directory.dExpiry >=CURDATE()
group by dc.dcName
order by COUNT(directory.id) DESC LIMIT 15');

        $advertiseList = DB::select('SELECT  *  FROM directory WHERE
                          dType = 1 and dExpiry >=CURDATE() order by dStarted DESC LIMIT 6 ');
        $classifiedList = DB::select('SELECT * FROM directory WHERE
                          dType = 0 and dExpiry >=CURDATE() order by dStarted DESC LIMIT 10 ');

        return view('new2')
            ->with('categories', Category::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
            ->skip(1)
                ->take(7)
            ->get())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('advertise', $advertiseList)
            ->with('classified', $classifiedList)
            ->with('events', Events::orderBy('eventDate', 'desc')
                ->take(3)
                ->get())
            ->with('overseaslist', Overseas::all())

            ->with('directoryCategory',$directory)

            ->with('latestNews',news::select('news.id as id', 'newsTitle','categoryName','news.created_at as created_at','feature')

                ->leftJoin('categories', 'news.category_id', '=', 'categories.id')
                ->where('news.isLatest',1)
                ->orderBy('news.created_at', 'desc')
                ->take(2)
                ->get())
            ->with('latestNews1',news::select('news.id as id', 'newsTitle','categoryName','news.created_at as created_at','feature')

                ->leftJoin('categories', 'news.category_id', '=', 'categories.id')
                ->where('news.isLatest',1)
                ->orderBy('news.created_at', 'desc')
                ->skip(2)
                ->take(2)
                ->get())
            ->with('firstSlider',news::where('news.isSlider',1)
                ->orderBy('news.created_at', 'desc')
                ->take(5)
                ->get())
            ->with('secondSlider',news::where('news.isSlider',1)
                ->orderBy('news.created_at', 'desc')
                ->skip(1)
                ->take(2)
                ->get())
            ->with('firstHeading', Category::where('id',7)
            ->get())
            ->with('vdcHeading', Category::where('id',10)
                ->get())
            ->with('sportHeading', Category::where('id',8)
                ->get())
            ->with('prabashHeading', Category::where('id',13)
                ->get())
            ->with('tourismHeading', Category::where('id',16)
                ->get())
            ->with('agriHeading', Category::where('id',12)
                ->get())
            ->with('eduHeading', Category::where('id',17)
                ->get())
            ->with('interviewHeading', Category::where('id',19)
                ->get())
            ->with('crimeHeading', Category::where('id',18)
                ->get())
            ->with('ecoHeading', Category::where('id',14)
                ->get())
            ->with('enterHeading', Category::where('id',9)
                ->get())
            ->with('polHeading', Category::where('id',20)
                ->get())
            ->with('mainNews',news::where('news.category_id',7)
                ->orderBy('news.created_at', 'desc')
                ->take(1)
                ->get())
            ->with('mainNews1',news::where('news.category_id',7)
                ->orderBy('news.created_at', 'desc')
                ->skip(1)
                ->take(3)
                ->get())
            ->with('articles', articles::orderBy('id', 'desc')
            ->take(3)
            ->get())
            ->with('vdcMainNews',news::where('news.category_id',10)
                ->orderBy('news.created_at', 'desc')
                ->take(1)
                ->get())
        ->with('vdcNews',news::where('news.category_id',10)
            ->orderBy('news.created_at', 'desc')
            ->take(3)
            ->skip(1)
            ->get())
            ->with('prabashMainNews',news::where('news.category_id',13)
                ->orderBy('news.created_at', 'desc')
                ->take(1)
                ->get())
            ->with('prabashNews',news::where('news.category_id',13)
                ->orderBy('news.created_at', 'desc')
                ->take(4)
                ->skip(1)
                ->get())
            ->with('tourismMainNews',news::where('news.category_id',16)
                ->orderBy('news.created_at', 'desc')
                ->take(1)
                ->get())
            ->with('tourismNews',news::where('news.category_id',16)
                ->orderBy('news.created_at', 'desc')
                ->take(5)
                ->get())
            ->with('charityNews',news::where('news.category_id',21)
                ->orderBy('news.created_at', 'desc')
                ->take(8)
                ->get())
            ->with('agriNews',news::where('news.category_id',12)
                ->orderBy('news.created_at', 'desc')
                ->take(3)
                ->get())
            ->with('polNews',news::where('news.category_id',20)
                ->orderBy('news.created_at', 'desc')
                ->take(3)
                ->get())
            ->with('eduNews',news::where('news.category_id',17)
                ->orderBy('news.created_at', 'desc')
                ->take(5)
                ->get())
            ->with('ecoNews',news::where('news.category_id',14)
                ->orderBy('news.created_at', 'desc')
                ->take(3)
                ->get())
            ->with('interviewNews',news::where('news.category_id',19)
                ->orderBy('news.created_at', 'desc')
                ->take(1)
                ->get())
            ->with('sportNews',news::where('news.category_id',8)
                ->orderBy('news.created_at', 'desc')
                ->take(1)
                ->get())
            ->with('sportNewsMain',news::where('news.category_id',8)
                ->orderBy('news.created_at', 'desc')
                ->take(4)
                ->skip(1)
                ->get())
            ->with('enterNews',news::where('news.category_id',9)
                ->orderBy('news.created_at', 'desc')
                ->take(1)
                ->get())
            ->with('enterNewsMain',news::where('news.category_id',9)
                ->orderBy('news.created_at', 'desc')
                ->take(4)
                ->skip(1)
                ->get())
            ->with('crimeNews',news::where('news.category_id',18)
                ->orderBy('news.created_at', 'desc')
                ->take(4)
                ->get())
            ->with('directoryCat', DCategory::all());
    }
    public function eventDetail($id){
        return view('front.event.detail')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('eventDetail', Events::where('id', $id)
                ->get());

    }
    public function newsDetail($id){
        news::find($id)->increment('views');
        $newsDet = news::find($id);
        $vdcInfo =$newsDet->vdcInfo_id ;
        $overSeasInfo =$newsDet->overseas_id > 0 ? $newsDet->overseas_id:0;
        $categoryid =$newsDet->category_id >= 1 ? $newsDet->category_id:0;

        if($vdcInfo > 0){

            return view('front.news.newsDetail')
                ->with('categories', Category::all())
                ->with('overseaslist', Overseas::all())
                ->with('aboutUs',Cms::where ('cmsType', '0')
                    ->get())
                ->with('vdclist', vdcInfo::orderBy('id','asc')
                    ->skip(1)
                    ->take(7)
                    ->get())
                ->with('categorylist', Category::orderBy('id','asc')
                    ->skip(1)
                    ->take(30)
                    ->get())
                ->with('newsFull', news::where('news.id',$id)
                    ->get())
                ->with('newsVdc', news::where('news.vdcInfo_id',$vdcInfo)

                    ->orderBy('news.created_at', 'desc')
                    ->take(10)
                    ->get())
                ->with('newsCategory', news::where('news.category_id',$categoryid)
                    ->orderBy('news.created_at', 'desc')
                    ->take(10)
                    ->get())
                ->with('newsOverseas',0)
                ->with('vdcname', vdcInfo::where('id',$vdcInfo)->get())
                ->with('categoryname', Category::where('id',$categoryid)->get());

        }
        else if($vdcInfo==0){
            return view('front.news.newsDetail')
                ->with('categories', Category::all())
                ->with('aboutUs',Cms::where ('cmsType', '0')
                    ->get())
                ->with('overseaslist', Overseas::all())
                ->with('vdclist', vdcInfo::orderBy('id','asc')
                    ->skip(1)
                    ->take(7)
                    ->get())
                ->with('categorylist', Category::orderBy('id','asc')
                    ->skip(1)
                    ->take(30)
                    ->get())
                ->with('newsFull', news::where('news.id',$id)
                    ->get())

                ->with('newsOverseas', news::where('news.overseas_id',$overSeasInfo)
                    ->orderBy('news.created_at', 'desc')
                    ->take(10)
                    ->get())
                ->with('newsCategory', news::where('news.category_id',$categoryid)
                    ->orderBy('news.created_at', 'desc')
                    ->take(10)
                    ->get())
                ->with('newsVdc',0)
                ->with('countryname', Overseas::where('id',$overSeasInfo)->get())
                ->with('categoryname', Category::where('id',$categoryid)->get());

        }
    }

    public function newsBycategory($id){
        return view ('front.news.newsCategory')
            ->with('categories', Category::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('categoryName', Category::where('id',$id)
            ->get())

                ->with('mainNews1',news::where('news.category_id',$id)
                    ->orderBy('news.created_at', 'desc')
                    ->paginate(10));


    }
    public function localInfo($id){
        return view ('front.local.information')
            ->with('categories', Category::all())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdcInfo', vdcInfo::where('id',$id)
                ->get())
            ->with('vdcintro',Cms::where ('cmsVdc', $id)
                ->get())
            ->with('newsVdc', news::where('news.vdcInfo_id',$id)
                ->orderBy('news.created_at', 'desc')
                ->take(10)
                ->get())
            ->with('directory', Directory::where('dVdc_id',$id)
                ->orderBy('dStarted', 'desc')
                ->take(10)
                ->get());

    }

    public function OverseasInfo($id){
        return view ('front.overseas.information')
            ->with('categories', Category::all())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('overSeasInfo', Overseas::where('id',$id)
                ->get())
            ->with('ointro',Cms::where ([['cmsOverseas','=',$id],['cmsType','=','2']])
                ->get())
            ->with('newsVdc', news::where('news.overseas_id',$id)
                ->orderBy('news.created_at', 'desc')
                ->take(10)
                ->get())
            ->with('directory', Directory::where('dcountry',$id)
                ->orderBy('dStarted', 'desc')
                ->take(10)
                ->get());

    }
    public function articleDetail($id){
        return view('front.article.detail')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('articleDetail', articles::where('id', $id)
                ->get());
    }
    public function lekh(){
        return view('front.article.mainart')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('articles', articles::orderBy('id','desc')
                ->paginate(10));
    }
    public function events(){
        return view('front.event.eventList')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('event', Events::orderBy('eventDate', 'desc')
                ->paginate(10));
    }

    public function classifiedDetail($id){
        $classDet = Directory::find($id);
        $vdcInfo =$classDet->dVdc_id;
        $overInfo = $classDet->dcountry;
        $catId = $classDet->dCat_id;

            return view('front.classified.detail')
                ->with('categories', Category::all())
                ->with('categorylist', Category::orderBy('id','asc')
                    ->skip(1)
                    ->take(30)
                    ->get())
                ->with('vdclist', vdcInfo::orderBy('id','asc')
                    ->skip(1)
                    ->take(7)
                    ->get())
                ->with('overseaslist', Overseas::all())
                ->with('aboutUs',Cms::where ('cmsType', '0')
                    ->get())
                ->with('classifiedDetail', Directory::where('id', $id)
                    ->get())
                ->with('similarCat',Directory::where('dCat_id','=',$catId)
                    ->where('id','!=',$id)
                    ->take(5)
                    ->orderBy('id','desc')
                    ->get());


    }
    public function directory(){
        return view('front.classified.list')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('directory', Directory::where('dType','=', '1')
                ->where('dExpiry','>', Carbon::now())
                ->orderBy('dStarted','desc')
                ->paginate(10));

    }
    public function ads(){
        return view('front.classified.adlist')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('directory', Directory::where('dType','=', '0')
                ->where('dExpiry','>', Carbon::now())
                ->orderBy('dStarted','desc')
                ->paginate(20));

    }
    public function contact(){
        return view('front.cms.page')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('contact', Cms::where ('id', '20')
                ->get());

    }
    public function cms($id){
        return view('front.cms.cmsPage')
            ->with('categories', Category::all())
            ->with('categorylist', Category::orderBy('id','asc')
                ->skip(1)
                ->take(30)
                ->get())
            ->with('vdclist', vdcInfo::orderBy('id','asc')
                ->skip(1)
                ->take(7)
                ->get())
            ->with('overseaslist', Overseas::all())
            ->with('aboutUs',Cms::where ('cmsType', '0')
                ->get())
            ->with('cms', Cms::where ('id', $id)
                ->get());

    }

    public function rss(){

        $blogs = news::orderBy('created_at', 'desc')
            ->take(20)
            ->get();

//        $blogs->map(function ($each) {
//            if (empty($each->id)) {
//                $each->id = Str::uuid();
//            }
//        });

        return view('rss' ,['blogs' => $blogs,
            'title' => 'Information about the ParbatNepal',]);

    }

    public function rssview($slug)
    {
        return news::where('id', $slug)->first();
    }
    public function newhome(){
        $mainNews=news::where('news.category_id',7)
            ->orderBy('news.created_at', 'desc')
            ->take(10)
            ->get();
        $foreignNews=news::where('news.category_id',13)
            ->orderBy('news.created_at', 'desc')
            ->take(5)
            ->get();

        return ['mainnews'=>$mainNews,'foreign'=>$foreignNews];

//
//        return Response()->json(array(
//            'main_news' =>$mainNews
//        ));
    }
    public function donation(){
        $donorList = DB::select('SELECT  *  FROM donation ORDER BY id DESC');
        return ['donors' =>$donorList];

    }


}
