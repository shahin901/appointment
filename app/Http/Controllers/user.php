<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\Mailtrap;
use DB;
use Mail;
use Auth;



class user extends Controller
{
    public function getHome()
    {
    	return view("open");
    }

    public function getProfile()
    {
        return view("user.teaProfile");

    }
       public function getProfile2(Request $regg)
    {
            $data['data']=DB::table('students')->get();
            $this->validate($regg ,[
              'email'=>'required|email|max:255',
              'password'=>'max:255',
            ]);
            if (Auth::attempt(['email'=>$regg->input('email'),'password'=>$regg->input('password')])) {
              return "sucess";
            }
            else{
            return redirect('/appoint');
            }
            
    }
     

    public function getAppoint()
    
    {
           
       $data['data'] = DB::table('users')->get();

        if (count($data)>0) 
        {
            return view("user.appointment",$data);      
        }
        else
        {
        return view("user.appointment");
        }
    	
     }

     public function getContact()
      {
        return view("user.contact");
      }


     public function getWelcome()
       {
    	return view("welcome");
       }


    public function sign()
      {
        return view('user.registration');
      }
    
     public function signin()
        {
            return view('user.stulog');

        }

        
     public function mail()
        {
        
        Mail::to('mdshamimr96@gmail.com')->send(new Mailtrap());


                /*
                Mail::send(['text'=>'mail'],['name','Md Shahin Kamal'],function($message){ 
                    $message->to('mdshahimr96@gmail.com','To Md Shahin Kamal')->subject('Test Email');
                    $message->from('mdshahimr96@gmail.com','Md Shahin Kamal');
            }); /*
                Mail::send(['text'=>'mail'],['name','Sarthak'],function($message){ 
                    $message->from( 'mdshahimr96@gmail.com', 'Me Team' );
                    $message->to( 'mdshahinkamal0@gmail.com', 'Shamim' )->subject ( 'Activate your account' );
                } ); */
            }

      public function appoint(Request $reg)
       
        {
        $name = $reg->input('Name');
        #$Applicant = $reg->input('Applicant');
        $Cell = $reg->input('Cell');
        $email = $reg->input('email');
        $Address = $reg->input('Address');
        $teacher = $reg->input('teacher');
        $date = $reg->input('Date');
        $day = $reg->input('Day');
        $time = $reg->input('Time');
        $Purpose = $reg->input('Purpose');

        $data = array('Name'=>$name,'Cell'=>$Cell,'mail'=>$email,'Address'=>$Address,'teacher'=>$teacher,'Date'=>$date,'Day'=>$day,'Time'=>$time,'Purpose'=>$Purpose);

        DB::table('appointlists')->insert($data);

        return redirect('/appoint');

        }


     public function delete($name)
        {

          #echo "come";
           # $name= appointment::find($name);
           # $name->destroy();
           DB::table('appointlists')->where('Cell',$name)->delete();
          return redirect('/approved');
        }

         public function appdelete($name)
        {

          #echo "come";
           # $name= appointment::find($name);
           # $name->destroy();
           DB::table('appointlists')->where('Cell',$name)->delete();
            
            return redirect('/approved');
        }



     public function stuStore(Request $stureg)
        {
        $name = $stureg->input('name');
        $email = $stureg->input('email');
        $pass = $stureg->input('password');
        $password = $stureg->input('confirm password');
       
        $data2 = array('name'=>$name,'email'=>$email,'password'=>$pass,'confirm password'=>$password);

        # $stureg['password'] = bcrypt($stureg->password);

        DB::table('students')->insert($data2); 
         return redirect('/sign_up');

    }

      public function stulogin(Request $request){
          
       /*
            $data['data'] = DB::table('students')->get();
            if (Auth::attemp(['email'=>$request->email,'&&','password'=>$request->password])) {
            echo "sucee";
            } 
        */
        
            return view("user.stuProfile");
         }



       public function getCH(request $name)
            {
                 
                 $data['data'] = DB::table('chours')
                ->select("Day as d","10-11 as twentytwo","11-12 as twentytwo2","12-01 as twentytwo3","01-02 as twentytwo4","02-03 as twentytwo5")
                ->get();

               if (count($data)>0) 
                {
                        #return "gg";
                    return view('user.chor',$data);
                }
                else
                {
                # return view('teacher.dup');
               echo "nothing";
                }   
            }

        public function getName()
        {   
            $data['data'] = DB::table('users')->get();

            if (count($data)>0) 
            {
           
                return view('user.requestch',$data);

            }
            else
            {
             return view('user.requestch');
            }
        }


        public function editd($id)
            {
               # $data = users::find($id);
                //$value = value::all();
               
               //  return view('user.ct', compact('data', 'value'));
              
            }
}
