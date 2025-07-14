<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navigations;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class NavigationsController extends Controller
{
    public function Index()
    {
        $navigations = Navigations::all();
        $parent_arr = Navigations::where('parent_id','0')->get();
        return view('backend.navigation.index', compact('navigations','parent_arr'));
    }//End Method


     public function Create()
    {
        $navigations = Navigations::where('parent_id', NULL)->whereOr('parent_id','0')->get();
        $parent_arr = Navigations::where('parent_id','0')->get();
        return view('backend.navigation.create', compact('navigations','parent_arr'));
    }//End Method

    public function Store(Request $request)
    {
        $request->validate([
            'name_en' => ['required','unique:navigations,name_en'],
            'name_th' => ['required','unique:navigations,name_th'],
            'slug_en' => ['required','unique:navigations,slug_en'],
            'slug_th' => ['required','unique:navigations,slug_th'],
        ]);

        $navigation = new Navigations();
        $navigation->parent_id = $request->parent_id;
        $navigation->token = Hash::make(Str::random(40));
        $navigation->section_name = $request->section_name;
        $navigation->name_en = $request->name_en;
        $navigation->name_th = $request->name_th;
        $navigation->slug_en = str_replace(" ","-",$request->slug_en);
        $navigation->slug_th = str_replace(" ","-",$request->slug_th);
        $navigation->external_url = $request->external_url;
        $navigation->status = $request->status;
        $navigation->save();

         $notification = array(
          'message' => 'Navigation created successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.navigation.index')->with($notification);
    }//End Method

    public function Edit(string $id)
    {
        $navigation = Navigations::find($id);
        $navigations = Navigations::where('parent_id', NULL)->whereOr('parent_id','0')->get();
        $parent_arr = Navigations::where('parent_id','0')->get();
        return view('backend.navigation.edit', compact('navigation','navigations','parent_arr'));
    }//End Method

    public function Update(Request $request)
    {
         $request->validate([
            'name_en' => ['required'],
            'name_th' => ['required'],
            'slug_en' => ['required'],
            'slug_th' => ['required'],
        ]);


        $navigation = Navigations::find($request->id);
        $navigation->parent_id = $request->parent_id;
        $navigation->order_id = $request->order_id;
        $navigation->section_name = $request->section_name;
        $navigation->name_en = $request->name_en;
        $navigation->name_th = $request->name_th;
        $navigation->slug_en = str_replace(" ","-",$request->slug_en);
        $navigation->slug_th = str_replace(" ","-",$request->slug_th);
        $navigation->external_url = $request->external_url;
        $navigation->status = $request->status;
        $navigation->save();

        $notification = array(
          'message' => 'Navigation updated successfully',
          'alert-type' => 'success'
        );

        //return redirect()->route('backend.navigation.index')->with('success', 'Navigation updated successfully.');
        return redirect()->route('backend.navigation.index')->with($notification);

    }//End Method

    public function Destroy(string $id)
    {
        $navigation = Navigations::find($id);
        $navigation->delete();

        $notification = array(
          'message' => 'Navigation deleted successfully',
          'alert-type' => 'success'
        );

        return redirect()->route('backend.navigation.index')->with($notification);

    }//End Method
}
