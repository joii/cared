<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Awards;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AwardsManagementController extends Controller
{
    public function Index(){
        $awards = Awards::all();
        return view('backend.awards.index', compact('awards'));
    }//End Method

    public function Create(){
        return view('backend.awards.create');
    }//End Method

    public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'field_en' => ['required'],
            'field_th' => ['required'],
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
            $img->scale(height:150)->toWebp(60)->save(public_path('upload/awards/'.$image_name_gen));
            $save_image_url = 'upload/awards/'.$image_name_gen;
       }

        $award = new Awards();
        $award->name_en = $request->name_en;
        $award->name_th = $request->name_th;
        $award->field_en = $request->field_en;
        $award->field_th = $request->field_th;
        $award->description_th = $request->description_th;
        $award->description_en = $request->description_en;
        $award->image_path = $save_image_url;
        $award->status = $request->status;
        $award->save();

         $notification = array(
          'message' => 'Award created successfully',
          'alert-type' => 'success'
        );

        $awards = Awards::all();
        return redirect()->route('backend.awards.index')->with($notification,$awards);
    }//End Method

    public function Edit(string $id)
    {
        $award = Awards::find($id);
        return view('backend.awards.edit', compact('award'));
    }//End Method

        public function Update(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'field_en' => ['required'],
            'field_th' => ['required'],
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
            $img->scale(height:150)->toWebp(60)->save(public_path('upload/awards/'.$image_name_gen));
            $save_image_url = 'upload/awards/'.$image_name_gen;

            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
       }

        $award = Awards::find($request->id);
        $award->name_en = $request->name_en;
        $award->name_th = $request->name_th;
        $award->field_en = $request->field_en;
        $award->field_th = $request->field_th;
        $award->description_th = $request->description_th;
        $award->description_en = $request->description_en;
        $award->image_path = $save_image_url;
        $award->status = $request->status;
        $award->save();

         $notification = array(
          'message' => 'Award updated successfully',
          'alert-type' => 'success'
        );

        $awards = Awards::all();
        return redirect()->route('backend.awards.index')->with($notification,$awards);
    }//End Method

    public function Destroy(string $id)
    {
        $award = Awards::find($id);


        if(file_exists($award->image_path)){
            unlink($award->image_path);
        }

        $award->delete();

        $notification = array(
          'message' => 'Awards  deleted successfully',
          'alert-type' => 'success'
        );

        $awards = Awards::all();
        return redirect()->route('backend.awards.index')->with($notification,$awards);

    }//End Method

}
