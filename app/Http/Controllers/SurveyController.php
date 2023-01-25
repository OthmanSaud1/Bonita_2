<?php

namespace App\Http\Controllers;

use App\Models\HairSurvey;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Database\Console\Migrations\ResetCommand;

class SurveyController extends Controller
{
    public function showSurveyPage() {
        if(auth()->check() == false) {
            abort(403, "NOT AUTHORIZED LOL");
        }

        return view('SurveyPage');

    }

    public function submitSurvey(Request $req) {
        // $formFields = $req->validate([
        //     "hair_Type" => ["required|in:Straight,Wavy,Coily,Curly"],
        //     "hair_Structure" => ['required|in:Fine,Medium,Coarse'],
        //     'hair_Moisture'=> ['required|in:Dry,Balanced,Oily'],
        //     "hair_Thickness" => ["required|in:Thin,Medium,Thick"],
        //     "is_dyed" => ["required|in:ture,flase"],
        //     "Age" => ["required", 'numeric'],
        //     "user_id" => ["required"]
        // ]);

        // if (isset(auth()->id)) {
        //     $adminData = [
        //         'name' => $info['adminName'],
        //         'user_id' => $createUser['id'],   // insert into user_id  
        //         'email_address' => $info['adminEmail'],
        //         'contact_number' => $info['adminNumber'],
        //     ];
        
        //     $createAdmin = AdminsModel::create($adminData);
        // }
        
            $surv= new HairSurvey();
            $surv->hair_type = $req->hair_type;
            $surv->hair_Structure = $req->hair_Structure;
            $surv->hair_Moisture = $req->hair_Moisture;
            $surv->hair_Thickness = $req->hair_Thickness;
            $surv->is_dyed = $req->is_dyed;
            $surv->age = $req->age;
            $surv->user_id = auth()->user()->id;
            $surv->save();

            return redirect("/")->with('message', "you have been logged out");



        // print_r(json_encode($req->all())->user_id);
    // HairSurvey::create($formFields);

    }
}
