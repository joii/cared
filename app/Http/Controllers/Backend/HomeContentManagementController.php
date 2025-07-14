<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeContent;

class HomeContentManagementController extends Controller
{
    public function Index()
    {
        $contents = HomeContent::all();
        return view('backend.home_content.index',compact('contents'));
    }

     public function Create(){
        return view('backend.home_content.create');
    }//End Method

         public function Store(Request $request)
    {

        $content = new HomeContent();
        $content->name_en = $request->name_en;
        $content->name_th = $request->name_th;
        $content->detail_th = $request->detail_th;
        $content->detail_en = $request->detail_en;
        $content->external_url = $request->external_url;
        $content->status = $request->status;
        $content->save();

         $notification = array(
          'message' => 'Homepage content created successfully',
          'alert-type' => 'success'
        );

        $contents = HomeContent::all();
        return redirect()->route('backend.home_content.index')->with($notification,$contents);
    }//End Method

     public function Edit(string $id)
    {
        $content = HomeContent::find($id);
        return view('backend.home_content.edit', compact('content'));
    }//End Method

      public function Update(Request $request)
    {

        $content = HomeContent::find($request->id);
        $content->name_en = $request->name_en;
        $content->name_th = $request->name_th;
        $content->detail_th = $request->detail_th;
        $content->detail_en = $request->detail_en;
        $content->external_url = $request->external_url;
        $content->status = $request->status;
        $content->save();


         $notification = array(
          'message' => 'Homepage content updated successfully',
          'alert-type' => 'success'
        );

        $contents = HomeContent::all();
        return redirect()->route('backend.home_content.index')->with($notification,$contents);
    }//End Method

         public function Destroy(string $id)
    {
        $content = HomeContent::find($id);
        $content->delete();
        $notification = array(
          'message' => 'Home Content  deleted successfully',
          'alert-type' => 'success'
        );

        $contents = HomeContent::all();
        return redirect()->route('backend.home_content.index')->with($notification,$contents);

    }//End Method

}
