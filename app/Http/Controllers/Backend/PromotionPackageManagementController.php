<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PromotionPackage;
use App\Models\PackageCategory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PromotionPackageManagementController extends Controller
{
    public function Index()
    {
        $promotion_packages = PromotionPackage::all();
        return view('backend.promotion_packages.index', compact('promotion_packages'));
    }

    public function Create()
    {
        $package_categories = PackageCategory::all();
        return view('backend.promotion_packages.create',compact('package_categories'));
    }

    public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
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
            $thumb_img->cover(800,800)->toWebp(100)->save(public_path('upload/promotion_package/thumbnail/'.$thumb_name_gen));
            $save_thumb_url = 'upload/promotion_package/thumbnail/'.$thumb_name_gen;
       }

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(width:1000)->toWebp(100)->save(public_path('upload/promotion_package/'.$image_name_gen));
            $save_image_url = 'upload/promotion_package/'.$image_name_gen;
       }

        $promotion = new PromotionPackage();
        $promotion->package_category_id = $request->package_category_id;
        $promotion->name_en = $request->name_en;
        $promotion->name_th = $request->name_th;
        $promotion->description_th = $request->description_th;
        $promotion->description_en = $request->description_en;
        $promotion->start_date = $request->start_date;
        $promotion->end_date = $request->end_date;
        $promotion->image_path = $save_image_url;
        $promotion->thumbnail_path = $save_thumb_url;
        $promotion->external_url = $request->external_url;
        $promotion->meta_title = $request->meta_title;
        $promotion->meta_description = $request->meta_description;
        $promotion->meta_keywords = $request->meta_keywords;
        $promotion->canonical_url = $request->canonical_url;
        $promotion->slug_en = str_replace(" ","-",$request->slug_en);
        $promotion->slug_th = str_replace(" ","-",$request->slug_th);
        $promotion->status = $request->status;
        $promotion->save();

         $notification = array(
          'message' => 'Promotion Package created successfully',
          'alert-type' => 'success'
        );

        $promotion_packages = PromotionPackage::all();
        return view('backend.promotion_packages.index', compact('promotion_packages'));
    }//End Method

     public function Edit(string $id)
    {
        $promotion = PromotionPackage::find($id);
        $package_categories = PackageCategory::all();
        return view('backend.promotion_packages.edit', compact('promotion','package_categories'));
    }//End Method

      public function Update(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
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
            $thumb_img->cover(800,800)->toWebp(100)->save(public_path('upload/promotion_package/thumbnail/'.$thumb_name_gen));
            $save_thumb_url = 'upload/promotion_package/thumbnail/'.$thumb_name_gen;

            if(file_exists($request->old_thumbnail)){
                unlink($request->old_thumbnail);
            }
       }

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
             $img->scale(width:1000)->toWebp(100)->save(public_path('upload/promotion_package/'.$image_name_gen));
            $save_image_url = 'upload/promotion_package/'.$image_name_gen;

            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
       }

        $promotion = PromotionPackage::find($request->id);
        $promotion->package_category_id = $request->package_category_id;
        $promotion->name_en = $request->name_en;
        $promotion->name_th = $request->name_th;
        $promotion->description_th = $request->description_th;
        $promotion->description_en = $request->description_en;
        $promotion->start_date = $request->start_date;
        $promotion->end_date = $request->end_date;
        $promotion->image_path = $save_image_url;
        $promotion->thumbnail_path = $save_thumb_url;
        $promotion->external_url = $request->external_url;
        $promotion->meta_title = $request->meta_title;
        $promotion->meta_description = $request->meta_description;
        $promotion->meta_keywords = $request->meta_keywords;
        $promotion->canonical_url = $request->canonical_url;
        $promotion->slug_en = str_replace(" ","-",$request->slug_en);
        $promotion->slug_th = str_replace(" ","-",$request->slug_th);
        $promotion->status = $request->status;
        $promotion->save();

         $notification = array(
          'message' => 'Promotion Package updated successfully',
          'alert-type' => 'success'
        );

        $promotion_packages = PromotionPackage::all();

        return redirect()->route('backend.promotion_package.index')->with($notification,$promotion_packages);
    }//End Method

     public function Destroy(string $id)
    {
        $promotion = PromotionPackage::find($id);

        if(file_exists($promotion->thumbnail_path)){
            unlink($promotion->thumbnail_path);
        }

        if(file_exists($promotion->image_path)){
            unlink($promotion->image_path);
        }

        $promotion->delete();

        $notification = array(
          'message' => 'Promotion Packag  deleted successfully',
          'alert-type' => 'success'
        );

        $promotion_packages = PromotionPackage::all();
        return redirect()->route('backend.promotion_package.index')->with($notification,$promotion_packages);

    }//End Method
}
