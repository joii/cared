<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLink;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SocialLinkManagementController extends Controller
{
    public function Index()
    {
        $socialLinks = SocialLink::all();
        return view('backend.social_link.index', compact('socialLinks'));
    }//End Method

    public function Create()
    {
        return view('backend.social_link.create');
    }//End Method

    public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'link_url' => ['required'],
        ]);

        // $image_path = 'uploads/social_link/';
        // $destinationPath = public_path($image_path);

        $save_url=NULL;

       if($request->hasFile('qrcode')) {
        //    $main_image = Image::read($request->file('qrcode'));
        //    $imageName = 'qrcode' . '_' . uniqid() . '.webp';
        //    $main_image->resize(800,800, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($destinationPath.$imageName);

            $image = $request->file('qrcode');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(width:300)->toWebp(60)->save(public_path('upload/social_link/'.$name_gen));
            $save_url = 'upload/social_link/'.$name_gen;
       }


        $social = new SocialLink();
        $social->name_en = $request->name_en;
        $social->name_th = $request->name_th;
        $social->link_url = $request->link_url;
        $social->icon_class = $request->icon_class;
        $social->qrcode = $save_url; //$image_path.$imageName;
        $social->status = 'active';
        $social->save();

         $notification = array(
          'message' => 'Social Link created successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.social_link.index')->with($notification);
    }

    public function Edit(string $id)
    {
        $social = SocialLink::find($id);
        return view('backend.social_link.edit', compact('social'));
    }//End Method

    public function Update(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'link_url' => ['required'],
        ]);

        $save_url = $request->old_qrcode;

         if($request->hasFile('qrcode')) {
            if(file_exists($save_url)){
                unlink($save_url);
            }

            $image = $request->file('qrcode');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.webp'; //.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->scale(width:300)->toWebp(60)->save(public_path('upload/social_link/'.$name_gen));
            $save_url = 'upload/social_link/'.$name_gen;
       }


        $social = SocialLink::find($request->id);
        $social->name_en = $request->name_en;
        $social->name_th = $request->name_th;
        $social->link_url = $request->link_url;
        $social->icon_class = $request->icon_class;
        $social->qrcode = $save_url;
        $social->status = $request->status;
        $social->save();


        $notification = array(
          'message' => 'Social Link updated successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.social_link.index')->with($notification);

    }//End Method

     public function Destroy(string $id)
    {
        $social = SocialLink::find($id);
        if(file_exists($social->qrcode)){
            unlink($social->qrcode);
        }
        $social->delete();

        $notification = array(
          'message' => 'Social Link deleted successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.social_link.index')->with($notification);

    }//End Method
}
