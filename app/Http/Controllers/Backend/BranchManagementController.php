<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\RoomType;
use App\Models\Facility;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class BranchManagementController extends Controller
{
      public function Index(){
        $branches = Branch::all();
        return view('backend.branches.index', compact('branches'));
    }//End Method

    public function Create(){
        $room_types = RoomType::all();
        $facilities = Facility::all();
        return view('backend.branches.create', compact('room_types','facilities'));
    }//End Method


     public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'slug_en' => ['required'],
            'slug_th' => ['required'],
        ]);

        $save_image_url = null;
        $save_thumbnail_url = null;
        $save_logo_url = null;
        $pdf_en_path = null;
        $pdf_th_path = null;
        // Upload Image and PDF File


      if($request->hasFile('thumbnail_path')) {
            $thumbnail = $request->file('thumbnail_path');
            $manager = new ImageManager(new Driver());
            $thumbnail_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $thumb = $manager->read($thumbnail);
            $thumb->scale(600,480)->toWebp(60)->save(public_path('upload/branches/thumbnail/'.$thumbnail_name_gen));
            $save_thumbnail_url = 'upload/branches/thumbnail/'.$thumbnail_name_gen;
       }

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(1920,640)->toWebp(60)->save(public_path('upload/branches/'.$image_name_gen));
            $save_image_url = 'upload/branches/'.$image_name_gen;
       }

       if($request->hasFile('logo_path')) {
            $logo = $request->file('logo_path');
            $manager = new ImageManager(new Driver());
            $logo_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $logo_img = $manager->read($logo);
            $logo_img->scaleDown(height:1200)->toWebp(60)->save(public_path('upload/branches/logo/'.$logo_name_gen));
            $save_logo_url = 'upload/branches/logo/'.$logo_name_gen;
       }

       if($request->hasFile('pdf_en_path')) {
            $file = $request->file('pdf_en_path');
            $path = $file->store('pdfs', 'public');
            // get the full public URL:
            $pdf_en_path = Storage::url($path);


       }

       if($request->hasFile('pdf_th_path')) {
            $file = $request->file('pdf_th_path');
            $path = $file->store('pdfs', 'public');
            // get the full public URL:
            $pdf_th_path = Storage::url($path);



       }

        $branch = new Branch();
        $branch->name_en = $request->name_en;
        $branch->name_th = $request->name_th;
        $branch->subtitle_th = $request->subtitle_th;
        $branch->subtitle_en = $request->subtitle_en;
        $branch->address_th = $request->address_th;
        $branch->address_en = $request->address_en;
        $branch->room_type = implode(',', $request->input('room_type', []));
        $branch->facilities = implode(',',$request->input('facilities', []));
        $branch->detail_th = $request->detail_th;
        $branch->detail_en = $request->detail_en;
        $branch->nearby_en = $request->nearby_en ;
        $branch->nearby_th = $request->nearby_th ;
        $branch->area_en = $request->area_en ;
        $branch->area_th = $request->area_th ;
        $branch->pdf_en_path = $pdf_en_path;
        $branch->pdf_th_path = $pdf_th_path;
        $branch->price_range = $request->price_range;
        $branch->line_url = $request->line_url;
        $branch->facebook_url = $request->facebook_url;
        $branch->gmap_url = $request->gmap_url;
        $branch->pnone_no = $request->pnone_no ;
        $branch->call_center_no = $request->call_center_no ;
        $branch->logo_path = $save_logo_url;
        $branch->thumbnail_path = $save_thumbnail_url;
        $branch->image_path = $save_image_url;
        $branch->meta_title = $request->meta_title;
        $branch->meta_description = $request->meta_description;
        $branch->meta_keywords = $request->meta_keywords;
        $branch->canonical_url = $request->canonical_url;
        $branch->slug_en = str_replace(" ","-",$request->slug_en);
        $branch->slug_th = str_replace(" ","-",$request->slug_th);
        $branch->status = $request->status;
        $branch->save();

         $notification = array(
          'message' => 'Branch created successfully',
          'alert-type' => 'success'
        );

        $branchs = Branch::all();

        return redirect()->route('backend.branch.index')->with($notification,$branchs);
    }//End Method

     public function Edit(string $id)
    {
        $branch = Branch::find($id);
        $room_types = RoomType::all();
        $facilities = Facility::all();
        $b_room_type = explode(',', $branch->room_type);
        $b_facilities = explode(',', $branch->facilities);
        return view('backend.branches.edit', compact('branch','room_types','facilities','b_room_type','b_facilities'));
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
        $save_thumbnail_url = $request->old_thumbnail;
        $save_logo_url = $request->old_logo;
        $pdf_en_path =  $request->old_pdf_en;
        $pdf_th_path =  $request->old_pdf_th;
        // Upload Image and PDF File


        if($request->hasFile('thumbnail_path')) {
            $thumbnail = $request->file('thumbnail_path');
            $manager = new ImageManager(new Driver());
            $thumbnail_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $thumb = $manager->read($thumbnail);
            $thumb->scale(600,480)->toWebp(100)->save(public_path('upload/branches/thumbnail/'.$thumbnail_name_gen));
            $save_thumbnail_url = 'upload/branches/thumbnail/'.$thumbnail_name_gen;

             if(!empty($request->old_thumbnail) && file_exists($request->old_thumbnail)){
                unlink($request->old_thumbnail);
            }
       }


       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(1920,640)->toWebp(100)->save(public_path('upload/branches/'.$image_name_gen));
            $save_image_url = 'upload/branches/'.$image_name_gen;

            if(!empty($request->old_image) && file_exists($request->old_image)){
                unlink($request->old_image);
            }
       }

       if($request->hasFile('logo_path')) {
            $logo = $request->file('logo_path');
            $manager = new ImageManager(new Driver());
            $logo_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $logo_img = $manager->read($logo);
            $logo_img->scaleDown(height: 100)->toWebp(100)->save(public_path('upload/branches/logo/'.$logo_name_gen));
            $save_logo_url = 'upload/branches/logo/'.$logo_name_gen;

            if(!empty($request->old_logo) && file_exists($request->old_logo)){
                unlink($request->old_logo);
            }
       }

        if($request->hasFile('pdf_en_path')) {
            $file = $request->file('pdf_en_path');
            $path = $file->store('pdfs', 'public');
            // get the full public URL:
            $pdf_en_path = Storage::url($path);

       }

       if($request->hasFile('pdf_th_path')) {
            $file = $request->file('pdf_th_path');
            $path = "upload/branches/pdf/";//$file->store('pdfs', 'public');
            // get the full public URL:
            $pdf_th_path = Storage::url($path);


       }

        $branch = Branch::find($request->id);
        $branch->name_en = $request->name_en;
        $branch->name_th = $request->name_th;
        $branch->subtitle_th = $request->subtitle_th;
        $branch->subtitle_en = $request->subtitle_en;
        $branch->address_th = $request->address_th;
        $branch->address_en = $request->address_en;
        $branch->room_type = implode(',', $request->input('room_type', []));
        $branch->facilities = implode(',',$request->input('facilities', []));
        $branch->detail_th = $request->detail_th;
        $branch->detail_en = $request->detail_en;
        $branch->nearby_en = $request->nearby_en ;
        $branch->nearby_th = $request->nearby_th ;
        $branch->area_en = $request->area_en ;
        $branch->area_th = $request->area_th ;
        $branch->pdf_en_path = $pdf_en_path;
        $branch->pdf_th_path = $pdf_th_path;
        $branch->price_range = $request->price_range;
        $branch->line_url = $request->line_url;
        $branch->facebook_url = $request->facebook_url;
        $branch->gmap_url = $request->gmap_url;
        $branch->pnone_no = $request->pnone_no ;
        $branch->call_center_no = $request->call_center_no ;
        $branch->logo_path = $save_logo_url;
        $branch->thumbnail_path = $save_thumbnail_url;
        $branch->image_path = $save_image_url;
        $branch->meta_title = $request->meta_title;
        $branch->meta_description = $request->meta_description;
        $branch->meta_keywords = $request->meta_keywords;
        $branch->canonical_url = $request->canonical_url;
        $branch->slug_en = str_replace(" ","-",$request->slug_en);
        $branch->slug_th = str_replace(" ","-",$request->slug_th);
        $branch->status = $request->status;
        $branch->save();

         $notification = array(
          'message' => 'Branch updated successfully',
          'alert-type' => 'success'
        );

         $branchs = Branch::all();

        return redirect()->route('backend.branch.index')->with($notification,$branchs);
    }//End Method


     public function Destroy(string $id)
    {
        $branch = Branch::find($id);

        if(file_exists($branch->thumbnail_path)){
            unlink($branch->thumbnail_path);
        }

        if(file_exists($branch->image_path)){
            unlink($branch->image_path);
        }

        $branch->delete();

        $notification = array(
          'message' => 'Branch  deleted successfully',
          'alert-type' => 'success'
        );

       $branchs = Branch::all();
        return redirect()->route('backend.branch.index')->with($notification,$branchs);

    }//End Method
}
