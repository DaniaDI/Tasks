<?php

namespace App\Http\Controllers\SiteThree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteThreeController extends Controller
{


function about(){
    return view('creative.about');
}






function contact(){
    return view('creative.contact');
}





function services(){
    return view('Creative.services');
}






function portfolio(){
    return view('Creative.portfolio');
}



function post1contact(Request $request){
     dd($request->all());
}




}
