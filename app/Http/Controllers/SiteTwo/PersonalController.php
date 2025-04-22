<?php

namespace App\Http\Controllers\SiteTwo;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class PersonalController extends Controller
{


    function index(){
        return view('personal.index');
    }

    function contact(){
        return view('personal.contact');
    }


    function projects(){
        return view('personal.projects');
    }

    function resume(){
        return view('personal.resume');
    }

    function viewcontact(){
        //ابعتي البيانات هنا$
        $contacts = Contact::all();
        return view('personal.view_contact',compact('contacts'));
    }

    function postconnect(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=> 'required|string|min:3',
            'phone'=> 'required',
            'email'=> 'required',
            'area'=> 'required',//area== msg
            'image'=>'required'//;text
        ]);

        $name ='SiteTwo_'. time() . '_' . rand() . '.' .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads'), $name);

         //بدي ادخل البيانات على داتا بيز

        Contact::create([
           'name' => $request->name,
           'phone' => $request->phone,
           'email' => $request->email,
           'area' => $request->area,// same as area
           'image' =>$name ,//اسم الصورة
        ]);
    }



}
