<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use App\Models\Article;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ArticlesManagementController extends Controller
{
     public function Index(){
        $categories = ArticleCategory::all();
        $articles = Article::all();
        return view('backend.articles.index', compact('categories','articles'));
    }//End Method

    public function Create(){
        $categories = ArticleCategory::all();
        return view('backend.articles.create', compact('categories'));
    }//End Method

     public function Store(Request $request)
    {
        $request->validate([
            'category_id' => ['required'],
            'title_en' => ['required'],
            'title_th' => ['required'],
            'slug_en' => ['required'],
            'slug_th' => ['required'],
        ]);

        $save_image_url = null;
        $save_thumb_url = null;
        // Upload Image and Thumbnail
        if($request->hasFile('thumbnail_path')) {
            $thumb = $request->file('thumbnail_path');
            $manager = new ImageManager(new Driver());
            $thumb_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $thumb_img = $manager->read($thumb);
            $thumb_img->cover(800,800)->toWebp(60)->save(public_path('upload/articles/thumbnail/'.$thumb_name_gen));
            $save_thumb_url = 'upload/articles/thumbnail/'.$thumb_name_gen;
       }

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(width:1000)->toWebp(60)->save(public_path('upload/articles/'.$image_name_gen));
            $save_image_url = 'upload/articles/'.$image_name_gen;
       }

        $article = new Article();
        $article->category_id = $request->category_id;
        $article->title_en = $request->title_en;
        $article->title_th = $request->title_th;
        $article->description_th = $request->description_th;
        $article->description_en = $request->description_en;
        $article->detail_th = $request->detail_th;
        $article->detail_en = $request->detail_en;
        $article->author_en = $request->author_en;
        $article->author_th = $request->author_th;
        $article->published_at = $request->published_at;
        $article->image_path = $save_image_url;
        $article->thumbnail_path = $save_thumb_url;
        $article->external_url = $request->external_url;
        $article->meta_title = $request->meta_title;
        $article->meta_description = $request->meta_description;
        $article->meta_keywords = $request->meta_keywords;
        $article->canonical_url = $request->canonical_url;
        $article->slug_en = str_replace(" ","-",$request->slug_en);
        $article->slug_th = str_replace(" ","-",$request->slug_th);
        $article->status = $request->status;
        $article->save();

         $notification = array(
          'message' => 'Article created successfully',
          'alert-type' => 'success'
        );

        $articles = Article::all();

        return redirect()->route('backend.article.index')->with($notification,$articles);
    }//End Method

     public function Edit(string $id)
    {
        $article = Article::find($id);
        $categories = ArticleCategory::all();
        return view('backend.articles.edit', compact('categories','article'));
    }//End Method

     public function Update(Request $request)
    {
        $request->validate([
            'category_id' => ['required'],
            'title_en' => ['required'],
            'title_th' => ['required'],
            'slug_en' => ['required'],
            'slug_th' => ['required'],
        ]);

        $save_image_url = $request->old_image;
        $save_thumb_url = $request->old_thumbnail;
        // Upload Image and Thumbnail
        if($request->hasFile('thumbnail_path')) {
            $thumb = $request->file('thumbnail_path');
            $manager = new ImageManager(new Driver());
            $thumb_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $thumb_img = $manager->read($thumb);
            $thumb_img->cover(800,800)->toWebp(60)->save(public_path('upload/articles/thumbnail/'.$thumb_name_gen));
            $save_thumb_url = 'upload/articles/thumbnail/'.$thumb_name_gen;

            if(file_exists($request->old_thumbnail)){
                unlink($request->old_thumbnail);
            }
       }

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(width:1000)->toWebp(60)->save(public_path('upload/articles/'.$image_name_gen));
            $save_image_url = 'upload/articles/'.$image_name_gen;

            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
       }

        $article = Article::find($request->id);
        $article->category_id = $request->category_id;
        $article->title_en = $request->title_en;
        $article->title_th = $request->title_th;
        $article->description_th = $request->description_th;
        $article->description_en = $request->description_en;
        $article->detail_th = $request->detail_th;
        $article->detail_en = $request->detail_en;
        $article->author_en = $request->author_en;
        $article->author_th = $request->author_th;
        $article->published_at = $request->published_at;
        $article->image_path = $save_image_url;
        $article->thumbnail_path = $save_thumb_url;
        $article->external_url = $request->external_url;
        $article->meta_title = $request->meta_title;
        $article->meta_description = $request->meta_description;
        $article->meta_keywords = $request->meta_keywords;
        $article->canonical_url = $request->canonical_url;
        $article->slug_en = str_replace(" ","-",$request->slug_en);
        $article->slug_th = str_replace(" ","-",$request->slug_th);
        $article->status = $request->status;
        $article->save();

         $notification = array(
          'message' => 'Article updated successfully',
          'alert-type' => 'success'
        );

        $articles = Article::all();

        return redirect()->route('backend.article.index')->with($notification,$articles);
    }//End Method


     public function Destroy(string $id)
    {
        $article = Article::find($id);

        if(file_exists($article->thumbnail_path)){
            unlink($article->thumbnail_path);
        }

        if(file_exists($article->image_path)){
            unlink($article->image_path);
        }

        $article->delete();

        $notification = array(
          'message' => 'Article  deleted successfully',
          'alert-type' => 'success'
        );

        $articles = Article::all();
        return redirect()->route('backend.article.index')->with($notification);

    }//End Method



}
