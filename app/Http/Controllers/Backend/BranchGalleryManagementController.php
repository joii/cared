<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BranchGallery;
use App\Models\Branch;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BranchGalleryManagementController extends Controller
{
    public function Index(string $branch_id){
        $galleries = BranchGallery::where('branch_id', $branch_id)->get();
        $branch = Branch::find($branch_id);
        $branch_id = $branch_id;
        return view('backend.branches.gallery.index', compact('galleries','branch','branch_id'));
    }//End Method

    public function Create(string $branch_id){
        $branches = Branch::all();
        $branch_id = $branch_id;
        return view('backend.branches.gallery.create', compact('branches','branch_id'));
    }//End Method

    public function Store(Request $request)
    {
        $request->validate([
            'branch_id' => ['required'],
            'title_en' => ['required'],
            'title_th' => ['required'],
        ]);

        $save_image_url = null;
        // Upload Image and Thumbnail
       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(800,535)->toWebp(60)->save(public_path('upload/branches/gallery/'.$image_name_gen));
            $save_image_url = 'upload/branches/gallery/'.$image_name_gen;
       }

        $gallery = new BranchGallery();
        $gallery->branch_id = $request->branch_id;
        $gallery->category_id = $request->category_id;
        $gallery->title_en = $request->title_en;
        $gallery->title_th = $request->title_th;
        $gallery->image_path = $save_image_url;
        $gallery->status = $request->status;
        $gallery->save();

         $notification = array(
          'message' => 'Gallery created successfully',
          'alert-type' => 'success'
        );

        $galleries = BranchGallery::where('branch_id', $request->branch_id)->get();
        $branch = Branch::find($request->branch_id);
        $branch_id = $request->branch_id;
        return view('backend.branches.gallery.index', compact('galleries','branch','branch_id'));
    }//End Method

    public function Edit(string $id)
    {
        $gallery = BranchGallery::find($id);
        $branches = Branch::all();
        $branch_id = $gallery->branch_id;
        return view('backend.branches.gallery.edit', compact('branches','gallery','branch_id'));
    }//End Method

    public function Update(Request $request)
    {
       $request->validate([
            'branch_id' => ['required'],
            'title_en' => ['required'],
            'title_th' => ['required'],
        ]);

        $save_image_url = $request->old_image;
        // Upload Image and Thumbnail

       if($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $manager = new ImageManager(new Driver());
            $image_name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(800,535)->toWebp(60)->save(public_path('upload/branches/gallery/'.$image_name_gen));
            $save_image_url = 'upload/branches/gallery/'.$image_name_gen;

            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }
       }

        $gallery = BranchGallery::find($request->id);
        $gallery->branch_id = $request->branch_id;
        $gallery->category_id = $request->category_id;
        $gallery->title_en = $request->title_en;
        $gallery->title_th = $request->title_th;
        $gallery->image_path = $save_image_url;
        $gallery->status = $request->status;
        $gallery->save();

         $notification = array(
          'message' => 'Gallery updated successfully',
          'alert-type' => 'success'
        );

        $galleries = BranchGallery::where('branch_id', $request->branch_id)->get();
        $branch = Branch::find($request->branch_id);
        $branch_id = $request->branch_id;

        return view('backend.branches.gallery.index', compact('galleries','branch','branch_id'));
    }//End Method

    public function Destroy(string $id)
    {
        $gallery = BranchGallery::find($id);


        if(file_exists($gallery->image_path)){
            unlink($gallery->image_path);
        }

        $gallery->delete();

        $notification = array(
          'message' => 'Gallery  deleted successfully',
          'alert-type' => 'success'
        );

        $galleries = BranchGallery::all();
        $branch = Branch::find($gallery->branch_id);
        $branch_id = $gallery->branch_id;

        return view('backend.branches.gallery.index', compact('galleries','branch','branch_id'));

    }//End Method
}
