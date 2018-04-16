<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class teacher extends Controller
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
    


    public function getIndex()
    {
    	return view('teacher.index');
    }

    public function getCounsell()
    {
      return view('teacher.setch');
    }

    public function getCounselling()
    {
        return view('teacher.dup');
    }

     public function getCHPage()
    {
    	return view('teacher.edit');
    }


     public function storeCH(Request $reg)
    {

      #echo "good";
      
        $day = $reg->input('Day');
        $time = $reg->input('10-11');
        $time2 = $reg->input('11-12');
        $time3 = $reg->input('12-01');
        $time4 = $reg->input('01-02');
        $time5 = $reg->input('02-03');
       

    $data = array('Day'=>$day,'10-11'=>$time,'11-12'=>$time2,'12-01'=>$time3,'01-02'=>$time4,'02-03'=>$time5);

        DB::table('chours')->insert($data);


          # return redirect('/appoint');

    }


    public function update(Request $reg2)
    {
       $user = Auth::user()->name;

         $day = $reg2->input('Day');
        $time = $reg2->input('10-11');
        $time2 = $reg2->input('11-12');
        $time3 = $reg2->input('12-01');
        $time4 = $reg2->input('01-02');
        $time5 = $reg2->input('02-03');
       

    $data = array('Day'=>$day,'10-11'=>$time,'11-12'=>$time2,'12-01'=>$time3,'01-02'=>$time4,'02-03'=>$time5);


    DB::table($user)
            ->where('Day',$day)
            ->update($data);

           return redirect('/counselling');

    }


     public function insertch(Request $reg3)
    {
       $user = Auth::user()->name;
      
         $day = $reg3->input('Day');
        $time = $reg3->input('10-11');
        $time2 = $reg3->input('11-12');
        $time3 = $reg3->input('12-01');
        $time4 = $reg3->input('01-02');
        $time5 = $reg3->input('02-03');
       

    $data = array('Day'=>$day,'10-11'=>$time,'11-12'=>$time2,'12-01'=>$time3,'01-02'=>$time4,'02-03'=>$time5);


    DB::table($user)->insert($data);

           return redirect('/counselling');

    }

   public function upstatus(Request $request)
   {
     $name = $request->input('st');

    DB::table('appointlists')->where('Name',$name)->update(array('status' => 'yes'));

    return redirect('/request');
   
   }


    public function getRequest()
    {        
        $user = Auth::user()->name;
         
         $data['data'] = DB::table('appointlists')->where([
                ['status', '=', 'No'],
                ['teacher', '=', $user],
            ])->get();

        if (count($data)>0) 
        {
       
            return view('teacher.request',$data);
        }
        else
        {
         return view('teacher.request');
        }
    }


    public function getApproved()
    {        
         $user = Auth::user()->name;

         $data['data'] = DB::table('appointlists')->where([
                ['status', '=', 'Yes'],
                ['teacher', '=', $user],
            ])->get();


        if (count($data)>0) 
        {
       
            return view('teacher.approved2',$data);
        }
        else
        {
          return view('teacher.approved2');
        }
    }

    public function getCH()
    {
    	
        $user = Auth::user()->name;
      
             $data['data'] = DB::table($user)
        ->select("Day as d","10-11 as twentytwo","11-12 as twentytwo2","12-01 as twentytwo3","01-02 as twentytwo4","02-03 as twentytwo5")
        ->get();

       if (count($data)>0) 
        {
              
            return view('teacher.counselling',$data);
        }
        else
        {
        # return view('teacher.dup');
       echo "nothing";
        }

    }


 


     public function Zndex()
    {
        return view('profile2');
    }


    public function check()
    {
        return view('editch');
    }

   


public function teaprofile()
    {
      # echo "hfh";
         
         $data['data'] = DB::table('teaprofile')->get();

        if (count($data)>0) 
        {
       
            #echo "fhfg";
           # return view('user.stuProfile',$);
            return view('profile2',$data);

        }
        else
        {
         #return view('user.requestch');
        echo "nothing";
        }
        
    }

  /*  public function logout(Request $request)
    {

        $request->session()->flush();
        return view('auth.login');
    }*/

}
