<?php

namespace App\Http\Controllers\SiteTwo;

use App\Http\Controllers\Controller;
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

    function postcontact(Request $request){
        dd($request->all());
    }



}
