<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navigations;
use App\Models\Banner;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BannerManagementController extends Controller
{
    public function Index(){
        $navigations = Navigations::all();
        $banners = Banner::all();
        return view('backend.banners.index', compact('navigations','banners'));
    }//End Method

     public function Create(){
        $navigations = Navigations::all();
        return view('backend.banners.create', compact('navigations'));
    }//End Method


     public function Store(Request $request)
    {
        $request->validate([
            'section_id' => ['required'],
            'image_path' => ['required'],
        ]);

        $save_image_url = null;

        // Upload Image and Thumbnail


       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(width:1920)->toWebp(60)->save(public_path('upload/banners/'.$image_name_gen));
            $save_image_url = 'upload/banners/'.$image_name_gen;
       }

        $banner = new Banner();
        $banner->section_id = $request->section_id;
        $banner->title1_en = $request->title1_en;
        $banner->title1_th = $request->title1_th;
        $banner->title2_en = $request->title2_en;
        $banner->title2_th = $request->title2_th;
        $banner->title3_en = $request->title3_en;
        $banner->title3_th = $request->title3_th;
        $banner->title4_en = $request->title4_en;
        $banner->title4_th = $request->title4_th;
        $banner->image_path = $save_image_url;
        $banner->alt_text = $request->alt_text;
        $banner->link_url = $request->link_url;
        $banner->theme = $request->theme;
        $banner->status = $request->status;
        $banner->save();

         $notification = array(
          'message' => 'Banner created successfully',
          'alert-type' => 'success'
        );

        $banners = Banner::all();

        return redirect()->route('backend.banner.index')->with($notification,$banners);
    }//End Method

         public function Edit(string $id)
    {
        $banner = Banner::find($id);
        $navigations = Navigations::all();
        return view('backend.banners.edit', compact('navigations','banner'));
    }//End Method

         public function Update(Request $request)
    {
        $request->validate([
           'section_id' => ['required'],
        ]);

        $save_image_url = $request->old_image;
        // Upload Image and Thumbnail


       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(width:1000)->toWebp(60)->save(public_path('upload/banners/'.$image_name_gen));
            $save_image_url = 'upload/banners/'.$image_name_gen;

            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
       }

        $banner = Banner::find($request->id);
        $banner->section_id = $request->section_id;
        $banner->title1_en = $request->title1_en;
        $banner->title1_th = $request->title1_th;
        $banner->title2_en = $request->title2_en;
        $banner->title2_th = $request->title2_th;
        $banner->title3_en = $request->title3_en;
        $banner->title3_th = $request->title3_th;
        $banner->title4_en = $request->title4_en;
        $banner->title4_th = $request->title4_th;
        $banner->image_path = $save_image_url;
        $banner->alt_text = $request->alt_text;
        $banner->link_url = $request->link_url;
        $banner->theme = $request->theme;
        $banner->status = $request->status;
        $banner->save();

         $notification = array(
          'message' => 'Banner updated successfully',
          'alert-type' => 'success'
        );

        $navigations = Navigations::all();
        $banners = Banner::all();
        return redirect()->route('backend.banner.index')->with($notification,$banners,$navigations);
    }//End Method


     public function Destroy(string $id)
    {
        $banner = Banner::find($id);



        if(file_exists($banner->image_path)){
            unlink($banner->image_path);
        }

        $banner->delete();

        $notification = array(
          'message' => 'Banner  deleted successfully',
          'alert-type' => 'success'
        );

        $navigations = Navigations::all();
        $banners = Banner::all();
        return redirect()->route('backend.banner.index')->with($notification,$banners,$navigations);

    }//End Method
}
