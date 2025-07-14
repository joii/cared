<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TestimonialManagementController extends Controller
{
     public function Index(){
        $testimonials = Testimonial::all();
        return view('backend.testimonials.index', compact('testimonials'));
    }//End Method

     public function Create(){
        return view('backend.testimonials.create');
     }//End Method

    public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'branch_en' => ['required'],
            'branch_th' => ['required'],
            'description_en' => ['required'],
            'description_th' => ['required'],
            'image_path' => ['required'],
        ]);

        $save_image_url = null;
        // Upload Image

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->cover(100,100)->toWebp(60)->save(public_path('upload/testimonials/'.$image_name_gen));
            $save_image_url = 'upload/testimonials/'.$image_name_gen;
       }

        $testimonial = new Testimonial();
        $testimonial->name_en = $request->name_en;
        $testimonial->name_th = $request->name_th;
        $testimonial->branch_en = $request->branch_en;
        $testimonial->branch_th = $request->branch_th;
        $testimonial->description_th = $request->description_th;
        $testimonial->description_en = $request->description_en;
        $testimonial->image_path = $save_image_url;
        $testimonial->status = $request->status;
        $testimonial->save();

         $notification = array(
          'message' => 'Testimonial created successfully',
          'alert-type' => 'success'
        );

        $testimonials = Testimonial::all();
        return redirect()->route('backend.testimonials.index')->with($notification,$testimonials);
    }//End Method

    public function Edit(string $id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.testimonials.edit', compact('testimonial'));
    }//End Method

    public function Update(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'branch_en' => ['required'],
            'branch_th' => ['required'],
            'description_en' => ['required'],
            'description_th' => ['required'],
        ]);

        $save_image_url = $request->old_image;
        // Upload Image

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->cover(100,100)->toWebp(60)->save(public_path('upload/testimonials/'.$image_name_gen));
            $save_image_url = 'upload/testimonials/'.$image_name_gen;

            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
       }

        $testimonial = Testimonial::find($request->id);
        $testimonial->name_en = $request->name_en;
        $testimonial->name_th = $request->name_th;
        $testimonial->branch_en = $request->branch_en;
        $testimonial->branch_th = $request->branch_th;
        $testimonial->description_th = $request->description_th;
        $testimonial->description_en = $request->description_en;
        $testimonial->image_path = $save_image_url;
        $testimonial->status = $request->status;
        $testimonial->save();

         $notification = array(
          'message' => 'Testimonial updated successfully',
          'alert-type' => 'success'
        );

        $testimonials = Testimonial::all();
        return redirect()->route('backend.testimonials.index')->with($notification,$testimonials);
    }//End Method

    public function Destroy(string $id)
    {
        $testimonial = Testimonial::find($id);


        if(file_exists($testimonial->image_path)){
            unlink($testimonial->image_path);
        }

        $testimonial->delete();

        $notification = array(
          'message' => 'Testimonials  deleted successfully',
          'alert-type' => 'success'
        );

        $testimonials = Testimonial::all();
        return redirect()->route('backend.testimonials.index')->with($notification,$testimonials);

    }//End Method
}
