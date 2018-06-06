<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use Session;

class ArticleController extends Controller
{
    public function index(){
        $article = articles::all();
        return view ('admin.article.index', compact('article'));

    }
    public function create()
    {
        return view ('admin.article.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'articleTitle'=>'required',
            'articleDesc'=>'required',
            'articleWriter'=>'required'
        ]);
        $feature = $request->feature;
        $featured_new_name = time().$feature->getClientOriginalName();
        $feature->move('uploads/article', $featured_new_name);
        $article = new articles();
        $article->articleTitle = $request->articleTitle;
        $article->articleWriter = $request->articleWriter;
        $article->articleWriterInfo = $request->articleWriterInfo;
        $article->articleDesc = $request->articleDesc;
        $article->articlePhoto = 'uploads/article/' . $featured_new_name;
        $article->save();
        Session::flash('success','Created the article');
        return redirect()->Route('article');
    }

    public function delete($id)
    {
        $article = articles::find($id);
        $article->delete();
        Session::flash('success', 'Article successfully deleted');
        return redirect()->Route('article');
    }
}
