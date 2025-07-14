<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;


class FooterManagementController extends Controller
{
     public function Index()
    {
        $footers = Footer::all();
        return view('backend.footer.index', compact('footers',));
    }//End Method


     public function Create()
    {
        return view('backend.footer.create');
    }//End Method

     public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'description_en' => ['required'],
            'description_th' => ['required'],
        ]);

        $footer = new Footer();
        $footer->name_en = $request->name_en;
        $footer->name_th = $request->name_th;
        $footer->description_en = $request->description_en;
        $footer->description_th = $request->description_th;
        $footer->address_en = $request->address_en;
        $footer->address_th = $request->address_th;
        $footer->external_url = $request->external_url;
        $footer->status = $request->status;
        $footer->save();

         $notification = array(
          'message' => 'Footer created successfully.',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.footer.index')->with($notification);
    }

     public function Edit(string $id)
    {
        $footer = Footer::find($id);
        return view('backend.footer.edit', compact('footer'));
    }//End Method

    public function Update(Request $request)
    {
         $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'description_en' => ['required'],
            'description_th' => ['required'],
        ]);



        $footer = Footer::find($request->id);
        $footer->name_en = $request->name_en;
        $footer->name_th = $request->name_th;
        $footer->description_en = $request->description_en;
        $footer->description_th = $request->description_th;
        $footer->address_en = $request->address_en;
        $footer->address_th = $request->address_th;
        $footer->external_url = $request->external_url;
        $footer->status = $request->status;
        $footer->save();

        $notification = array(
          'message' => 'Footer updated successfully',
          'alert-type' => 'success'
        );


        return redirect()->route('backend.footer.index')->with($notification);

    }//End Method


    public function Destroy(string $id)
    {
        $footer = Footer::find($id);
        $footer->delete();

        $notification = array(
          'message' => 'Footer deleted successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.footer.index')->with($notification);

    }//End Method


}
