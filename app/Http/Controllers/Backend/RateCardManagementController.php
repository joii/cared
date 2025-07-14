<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NursingHomePeriod;
use App\Models\NursingHomeProgram;
use App\Models\BranchRateCard;
use App\Models\Branch;

class RateCardManagementController extends Controller
{
    public function Index(string $branch_id){
        $periods = NursingHomePeriod::all();
        $programs = NursingHomeProgram::all();
        $rate_cards = BranchRateCard::where('branch_id', $branch_id)->get();
        $branch_id = $branch_id;
        $branch = Branch::find($branch_id);
        return view('backend.branches.rate_card.index', compact('periods','programs','rate_cards','branch_id','branch'));
    }//End Method

     public function Create(string $branch_id){
        $branches = Branch::all();
        $branch_id = $branch_id;
        $periods = NursingHomePeriod::all();
        $programs = NursingHomeProgram::all();
        return view('backend.branches.rate_card.create', compact('branches','branch_id','periods','programs'));
    }//End Method

    public function Store(Request $request)
    {
        $request->validate([
            'branch_id' => ['required'],
            'program_id' => ['required'],
            'period_id' => ['required'],
        ]);



        $rate_card = new BranchRateCard();
        $rate_card->branch_id = $request->branch_id;
        $rate_card->program_id = $request->program_id;
        $rate_card->period_id = $request->period_id;
        $rate_card->dormitory_room_price = $request->dormitory_room_price;
        $rate_card->double_room_price = $request->double_room_price;
        $rate_card->single_room_price = $request->single_room_price;
        $rate_card->detached_house_price = $request->detached_house_price;
        $rate_card->status = $request->status;
        $rate_card->save();

         $notification = array(
          'message' => 'Rate card created successfully',
          'alert-type' => 'success'
        );

        $branch_id = $request->branch_id;
        $rate_cards = BranchRateCard::where('branch_id', $branch_id)->get();
        $branch = Branch::find($branch_id);
        return redirect()->route('backend.branch_rate_card.index',$branch_id)->with($notification,$branch_id,$rate_cards,$branch);


    }//End Method

    public function Edit(string $id)
    {
        $rate_card = BranchRateCard::find($id);
        $branches = Branch::all();
        $branch_id = $rate_card->branch_id;
        $periods = NursingHomePeriod::all();
        $programs = NursingHomeProgram::all();
        return view('backend.branches.rate_card.edit', compact('branches','rate_card','branch_id','periods','programs'));
    }//End Method

    public function Update(Request $request)
    {
        $request->validate([
            'branch_id' => ['required'],
            'program_id' => ['required'],
            'period_id' => ['required'],
        ]);



        $rate_card = BranchRateCard::find($request->id);
        $rate_card->branch_id = $request->branch_id;
        $rate_card->program_id = $request->program_id;
        $rate_card->period_id = $request->period_id;
        $rate_card->dormitory_room_price = $request->dormitory_room_price;
        $rate_card->double_room_price = $request->double_room_price;
        $rate_card->single_room_price = $request->single_room_price;
        $rate_card->detached_house_price = $request->detached_house_price;
        $rate_card->status = $request->status;
        $rate_card->save();

         $notification = array(
          'message' => 'Rate card updated successfully',
          'alert-type' => 'success'
        );

        $branch_id = $request->branch_id;
        $rate_cards = BranchRateCard::where('branch_id', $branch_id)->get();
        $branch = Branch::find($branch_id);
        return redirect()->route('backend.branch_rate_card.index',$branch_id)->with($notification,$branch_id,$rate_cards,$branch);


    }//End Method

     public function Destroy(string $id)
    {
        $rate_card = BranchRateCard::find($id);

        $rate_card->delete();

        $notification = array(
          'message' => 'Rate card deleted successfully',
          'alert-type' => 'success'
        );

        $branch_id = $rate_card->branch_id;
        $rate_cards = BranchRateCard::where('branch_id', $branch_id)->get();
        $branch = Branch::find($branch_id);
        return redirect()->route('backend.branch_rate_card.index',$branch_id)->with($notification,$branch_id,$rate_cards,$branch);


    }//End Method
}
