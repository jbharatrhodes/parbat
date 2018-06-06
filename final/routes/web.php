<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () {
//    return view('coming');
//});

//Route::get('/new', function () {
//    return view('new');
//});
//News
Route::get('/blog/rss', [
    'uses' => 'FrontEndController@rss',
]);
Route::get('blog/{slug}', [
    'as' => 'news.newsDetail',
    'uses' => 'FrontEndController@rssview',
]);

//Route::get('/', 'FrontEndController@index')->name('main');
Route::get('/naya', 'FrontEndController1@index')->name('new');
Route::get('/', 'FrontEndController2@index')->name('main');
Route::get('/homenew', 'FrontEndController@newhome')->name('homenew');
Route::get('/donationapi', 'FrontEndController2@donation')->name('donationapi');
Route::get('/news/category/{id}', 'FrontEndController@newsBycategory')->name('news.category');
Route::get('/news/category/7', 'FrontEndController@newsBycategory')->name('mainnews');
Route::get('/news/category/19', 'FrontEndController@newsBycategory')->name('interview');
Route::get('/local/{id}', 'FrontEndController@localInfo')->name('local');
Route::get('/articles', 'FrontEndController@lekh')->name('articles');
Route::get('/directories', 'FrontEndController@directory')->name('directories');
Route::get('/classified', 'FrontEndController@ads')->name('classified');
Route::get('/contact', 'FrontEndController@contact')->name('contact');
Route::get('/classified/detail/{id}', 'FrontEndController@classifiedDetail')->name('classified.detail');
Route::get('/events', 'FrontEndController@events')->name('events');
Route::get('/events/eventDetail/{id}', 'FrontEndController@eventDetail')->name('events.eventDetail');
Route::get('/news/newsDetail/{id}', 'FrontEndController@newsDetail')->name('news.newsDetail');
Route::get('/articles/articleDetail/{id}', 'FrontEndController@articleDetail')->name('article.newsDetail');
Route::get('/overseas/{id}', 'FrontEndController@OverseasInfo')->name('overseas');
Route::get('/cms/{id}', 'FrontEndController@cms')->name('cms');
Auth::routes();



Route::group(['prefix' =>'admin', 'middleware'=>'auth'], function()
{
    //Home
    Route::get('/home', 'HomeController@index')->name('home');



    Route::get('/news/create', 'NewsController@create')->name('news.create');
    Route::get('/news/display', 'NewsController@index')->name('news.display');
    Route::post('/news/store', 'NewsController@addNews')->name('news.store');
    Route::get('/news/delete/{id}', 'NewsController@delete')->name('news.delete');
    Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::get('/news/unpublish/{id}', 'NewsController@unpublish')->name('news.unpublish');
    Route::post('/news/update/{id}', 'NewsController@update')->name('news.update');

    //Event
    Route::get('/event/create', 'EventCategory@create')->name('event.create');
    Route::get('/event/display', 'EventCategory@index')->name('event.display');
    Route::post('/event/store', 'EventCategory@addEvent')->name('event.store');
    Route::get('/event/delete/{id}', 'EventCategory@delete')->name('event.delete');
    Route::get('/event/edit/{id}', 'EventCategory@edit')->name('event.edit');
    Route::get('/event/unpublish/{id}', 'EventCategory@unpublish')->name('event.unpublish');
    Route::post('/event/update/{id}', 'EventCategory@update')->name('event.update');


    //News Category
    Route::get('/newsCategory/create', 'NewsCategory@create')->name('newsCategory.create');
    Route::post('/newsCategory/store', 'NewsCategory@addCategory')->name('newsCategory.store');
    Route::post('/newsCategory/update/{id}', 'NewsCategory@update')->name('newsCategory.update');
    Route::get('/newsCategory/categories', 'NewsCategory@viewCategory')->name('newsCategory.categories');
    Route::get('/newsCategory/delete/{id}', 'NewsCategory@deleteCategory')->name('newsCategory.delete');
    Route::get('/newsCategory/edit/{id}', 'NewsCategory@editCategory')->name('newsCategory.edit');

    //VDC
    Route::get('/vdcs/vdclist', 'Vdcs@index')->name('vdcs.vdclist');
    Route::get('/vdcs/delete/{id}', 'Vdcs@deleteVdc')->name('vdcs.delete');
    Route::get('/vdcs/edit/{id}', 'Vdcs@editVdc')->name('vdcs.edit');
    Route::post('/vdcs/update/{id}', 'Vdcs@updateVdc')->name('vdcs.update');

    //Article
    Route::get('/article', 'ArticleController@index')->name('article');
    Route::get('/article/delete/{id}', 'ArticleController@delete')->name('article.delete');
    Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
    Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');
    Route::get('/article/create', 'ArticleController@create')->name('article.create');
    Route::post('article/store','ArticleController@store')->name('article.store');

    //Tags
   Route::get('/tags', 'tagController@index')->name('tags');
   Route::get('/tags/create', 'tagController@create')->name('tags.create');
   Route::post('tags/store','tagController@store')->name('tags.store');
    Route::get('tags/edit/{id}','tagController@edit')->name('tags.edit');
    Route::get('tags/delete/{id}','tagController@delete')->name('tags.delete');

    //Overseas
    Route::get('/overseas', 'OverSeasController@index')->name('overseas');
    Route::get('/overseas/create', 'OverSeasController@create')->name('overseas.create');
    Route::post('overseas/store','OverSeasController@store')->name('overseas.store');
    Route::get('overseas/edit/{id}','OverSeasController@edit')->name('overseas.edit');
    Route::get('overseas/delete/{id}','OverSeasController@delete')->name('overseas.delete');
    Route::post('overseas/update/{id}','OverSeasController@update')->name('overseas.update');


    //CMS
    Route::get('/cms', 'CmsController@index')->name('cms');
    Route::get('/cms/create', 'CmsController@create')->name('cms.create');
    Route::post('cms/store','CmsController@store')->name('cms.store');
    Route::get('cms/edit/{id}','CmsController@edit')->name('cms.edit');
    Route::get('cms/delete/{id}','CmsController@delete')->name('cms.delete');
    Route::post('cms/update/{id}','CmsController@update')->name('cms.update');

    //Directory Category
    Route::get('/dCategory/create', 'CatDirectory@create')->name('dCategory.create');
    Route::post('/dCategory/store', 'CatDirectory@store')->name('dCategory.store');
    Route::post('/dCategory/update/{id}', 'CatDirectory@update')->name('dCategory.update');
    Route::get('/dCategory/categories', 'CatDirectory@index')->name('dCategory.categories');
    Route::get('/dCategory/delete/{id}', 'CatDirectory@deleteCategory')->name('dCategory.delete');
    Route::get('/dCategory/edit/{id}', 'CatDirectory@edit')->name('dCategory.edit');

    //Directory
    Route::get('/directory/create', 'DirectoryController@create')->name('directory.create');
    Route::get('/directory', 'DirectoryController@index')->name('directory');
    Route::post('/directory/store', 'DirectoryController@store')->name('directory.store');
    Route::get('/directory/delete/{id}', 'DirectoryController@delete')->name('directory.delete');
    Route::get('/directory/edit/{id}', 'DirectoryController@edit')->name('directory.edit');
    Route::post('/directory/update/{id}', 'DirectoryController@update')->name('directory.update');


});
