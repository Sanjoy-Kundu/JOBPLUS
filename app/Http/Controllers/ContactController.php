<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    public function dashboardContact():View{
        return view("pages.dashboard.contactPage");
    }

    public function webContact(Request $request){
        // $request->validate([
        //     "contact_email" => "requuired|max:30|unique:contacts,contact_email",
        //     "contact_mobile" => "required",
        //     "contact_address" => "required",

        // ],[

        //     "contact_email.required" => "Email is required",
        //     "contact_email.unique"  => "Email already taken",
        //     "contact_mobile.required" => "Mobile number is required",
        //     "contact_address.required"  => "Address is required",
        // ]);
         
        try{
            $row = Contact::all()->count();
            if($row < 2){
                Contact::create([
                    "contact_email" => Str::lower($request->input("contact_email")),
                    "contact_mobile" =>$request->input("contact_mobile"),
                    "contact_address" => Str::upper($request->input("contact_address")),
                ]);
                return response()->json(["status" => "success", "message" => "User Contact Uploaded Successfully"]);
            }else{
                return response()->json(["status" => "fail", "message" => "Limit Over Your Can Update"]);
            }
         
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message"=>$ex->getMessage()]);
        }
    }



    public function contactGetList(){
        try{
            $data =  Contact::where("id",1)->first();
            return response()->json(["status" => "success", "data" => $data]);
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message"=>$ex->getMessage()]);
        }
        
    }

    public function webContactupdate(Request $request){
        try{
            Contact::where("id","=",$request->input("id"))->update([
                "contact_email" => Str::lower($request->input("contact_email")),
                "contact_mobile" =>$request->input("contact_mobile"),
                "contact_address" => Str::upper($request->input("contact_address")),
            ]);
            return response()->json(["status" => "success", "message" => "User Contact Updated Successfully"]);

        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }
}
