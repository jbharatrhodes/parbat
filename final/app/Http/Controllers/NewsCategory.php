<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;
use Session;
class NewsCategory extends Controller
{
    public function create()
    {
        return view ('admin.news.createCategory');
    }

    public function addCategory(Request $request)
    {
        $this->validate($request, [
            'CategoryTitle'=>'required'
        ]);
        $category = new Category();
        $category->categoryName = $request->CategoryTitle;
        $category->save();
        Session::flash('success', 'Successfully aded the category');
        return redirect()->Route('newsCategory.categories');

    }
    public function viewCategory()
    {
        $categories = Category::all();
        return view ('admin.news.viewCategory', compact('categories'));
    }
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view ('admin.news.editCategory', compact('category'));
    }

    public function update(Request $request , $id)
    {

        $this->validate($request, [
            'CategoryTitle'=>'required'
        ]);
        $category = Category::find($id);
        $category->categoryName = $request->CategoryTitle;
        $category->save();
        Session::flash('success', 'Successfully edited the category');
        return redirect()->Route('newsCategory.categories');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('success', 'Successfully Deleted');
        return redirect()->Route('newsCategory.categories');

    }
}
