<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GoogleAnalytic;

class GAManagementController extends Controller
{
    public function Index(){
        $gtag_data =  GoogleAnalytic::latest()->get();

        if($gtag_data->count() > 0){
            $gtag = $gtag_data[0];
        }else{
            $gtag = new GoogleAnalytic();
        }
        return view('backend.ga.index', compact('gtag'));
    }//End Method

    public function GAStore(Request $request){

        $gtag = GoogleAnalytic::latest()->get();

        if($gtag->count() > 0){
            $gtag = GoogleAnalytic::findOrFail(1);
            $gtag->gtag = $request->gtag;
            $gtag->save();

        }else{
            GoogleAnalytic::create([
                'gtag' => $request->gtag,
            ]);
        }


        $notification = array(
            'message' => 'Google Analytic Inserted Successfully',
            'alert-type' => 'success'
        );

       return redirect()->route('backend.ga.index')->with($notification,$gtag);


    }//End method
}
