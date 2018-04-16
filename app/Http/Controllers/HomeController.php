<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       echo "hfh";
         /*
         $data['data'] = DB::table('teaprofile')->get();

        if (count($data)>0) 
        {
       
            echo "fhfg";
           # return view('user.stuProfile',$);
            #return view('profile2',$data);

        }
        else
        {
         #return view('user.requestch');
        echo "nothing";
        }
        */
    }
}
