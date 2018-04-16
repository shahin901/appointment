<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function getCH()
    {
    	
         $data['data']= DB::table('chours')->get();
    
        if (count($data)>0) 
        {
            return view('teacher.dup',$data);
        }
        else
        {
         return view('teacher.dup');
        #echo "nothing";
        }*/

    }}
