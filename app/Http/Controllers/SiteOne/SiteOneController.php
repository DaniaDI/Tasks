<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    function home(){
         return view('lect4.home');
    }

    function about(){
       return view('lect4.about');
    }


    function contact(){
        echo'<h2>contact us</h2>';
    }

    function msg($id = null){
        //1- return view('lect4.msg')->with('id',$id);

        //2-return view('lect4.msg',[ 'id'=> $id]);

        return view ('lect4.msg',compact('id'));
    }
 

}
