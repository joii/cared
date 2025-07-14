<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleCategoryManagementController extends Controller
{
    public function Index(){
        $categories = ArticleCategory::all();
        $parent_arr = ArticleCategory::where('parent_id','0')->get();
        return view('backend.article_category.index', compact('categories','parent_arr'));
    }//End Method

     public function Create(){
        $parent_arr = ArticleCategory::where('parent_id','0')->get();
        return view('backend.article_category.create', compact('parent_arr'));
    }//End Method

     public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required','unique:navigations,name_en'],
            'name_th' => ['required','unique:navigations,name_th'],
            'slug_en' => ['required','unique:navigations,slug_en'],
            'slug_th' => ['required','unique:navigations,slug_th'],
        ]);

        $article_category = new ArticleCategory();
        $article_category->parent_id = $request->parent_id;
        $article_category->name_en = $request->name_en;
        $article_category->name_th = $request->name_th;
        $article_category->slug_en = str_replace(" ","-",$request->slug_en);
        $article_category->slug_th = str_replace(" ","-",$request->slug_th);
        $article_category->status = $request->status;
        $article_category->save();

         $notification = array(
          'message' => 'Article category created successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.article_category.index')->with($notification);
    }//End Method

    public function Edit(string $id)
    {
        $article_category = ArticleCategory::find($id);
        $parent_arr = ArticleCategory::where('parent_id','0')->get();
        return view('backend.article_category.edit', compact('article_category','parent_arr'));
    }//End Method

    public function Update(Request $request)
    {
         $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'slug_en' => ['required'],
            'slug_th' => ['required'],
        ]);


        $article_category = ArticleCategory::find($request->id);
        $article_category->parent_id = $request->parent_id;
        $article_category->name_en = $request->name_en;
        $article_category->name_th = $request->name_th;
        $article_category->slug_en = str_replace(" ","-",$request->slug_en);
        $article_category->slug_th = str_replace(" ","-",$request->slug_th);
        $article_category->status = $request->status;
        $article_category->save();

        $notification = array(
          'message' => 'Article category updated successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.article_category.index')->with($notification);

    }//End Method

    public function Destroy(string $id)
    {
        $article_category = ArticleCategory::find($id);
        $article_category->delete();

        $notification = array(
          'message' => 'Article category deleted successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.article_category.index')->with($notification);

    }//End Method


}
