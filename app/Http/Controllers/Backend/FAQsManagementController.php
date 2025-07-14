<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faqs;

class FAQsManagementController extends Controller
{
     public function Index(){
        $faqs = FAQs::all();
        return view('backend.faqs.index', compact('faqs'));
    }//End Method

    public function Create(){
        return view('backend.faqs.create');
    }//End Methodqwa

    public function Store(Request $request)
    {
        $request->validate([
            'question_en' => ['required'],
            'question_th' => ['required'],
            'answer_en' => ['required'],
            'answer_th' => ['required'],
        ]);

        $faq = new FAQs();
        $faq->question_en = $request->question_en;
        $faq->question_th = $request->question_th;
        $faq->answer_en = $request->answer_en;
        $faq->answer_th = $request->answer_th;
        $faq->status = $request->status;
        $faq->save();

         $notification = array(
          'message' => 'FAQs created successfully',
          'alert-type' => 'success'
        );

        $faqs = FAQs::all();
        return view('backend.faqs.index', compact('faqs'));
    }//End Method

    public function Edit(string $id)
    {
        $faq = FAQs::find($id);
        return view('backend.faqs.edit', compact('faq'));
    }//End Method

    public function Update(Request $request)
    {
       $request->validate([
            'question_en' => ['required'],
            'question_th' => ['required'],
            'answer_en' => ['required'],
            'answer_th' => ['required'],
        ]);

        $faq = FAQs::find($request->id);
        $faq->question_en = $request->question_en;
        $faq->question_th = $request->question_th;
        $faq->answer_en = $request->answer_en;
        $faq->answer_th = $request->answer_th;
        $faq->status = $request->status;
        $faq->save();

         $notification = array(
          'message' => 'FAQs updated successfully',
          'alert-type' => 'success'
        );

        $faqs = FAQs::all();
        return view('backend.faqs.index', compact('faqs'));

    }//End Method

    public function Destroy(string $id)
    {
        $faq = FAQs::find($id);

        $faq->delete();

        $notification = array(
          'message' => 'FAQs  deleted successfully',
          'alert-type' => 'success'
        );

        $faqs = FAQs::all();
        return view('backend.faqs.index', compact('faqs'));

    }//End Method

}
