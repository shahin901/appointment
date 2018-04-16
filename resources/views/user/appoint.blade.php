<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>application</title>

    <!-- Bootstrap -->
   
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  </head>
  <body>
   

<div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
           
            <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

     <a class="navbar-brand" href="index"><img src="font/img/logo.png" style="width: 40px;height: 30px;"></a>
                     </div>

               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right" style="display: inline;">
                  
                <!--     <li><a href="stuProfile">Profile</a></li> -->
                           <li><a href="cht">Counselling Time</a></li>
                            <li><a href="contact">Contact</a></li>
                           <li><a href="appoint">Appoinment</a></li>
                  
                  
                  </ul>
                
                  </div><!-- /.navbar-collapse -->
               </div><!-- /.container-fluid -->
            </nav>
         </div>
       </div>  



       <div class="row">
        <div class="col-md-12" style="padding: 60px 50px 30px 40px;color: black">

          <h2 style="text-align: center;">Appointment Apply</h2> <br>

          <form action="insert" method="post">
           Name : <br>
           <input type="text" name="Name" size="160px" style="border-radius: 25px; height: 35px;"> <br>

           Applicant details : <br>
           <input type="text" name="Applicant" size="160px" style="border-radius: 25px; height: 35px;"> <br>

           Cell : <br>
           <input type="text" name="Cell" size="160px" style="border-radius: 25px; height: 35px;"> <br>

           E-mail : <br>
           <input type="email" name="email" size="160px" style="border-radius: 25px; height: 35px;"> <br>

           Address : <br>
           <input type="text" name="Address" size="160px" style="border-radius: 25px; height: 35px;"> <br>

           Purpose of your meeting : <br>
           <input type="text" name="Purpose" size="160px" style="border-radius: 25px; height: 35px;"> <br>

           Refference details (if any) : <br>
           <input type="text" name="Refference" size="160px" style="border-radius: 25px; height: 35px;"> <br>

            Prefer your time:  <br>
                      <input type="text" name="Prefer" size="160px" style="border-radius: 25px; height: 35px;"> <br>


           Short description of your meeting purpose : <br>
           <input type="text" name="Short" size="50px" style="border-radius: 25px; height: 150px;"> <br><br>
          
          <input type="hidden" name="_token" value=" {{ csrf_field() }}">
           <input type="submit" name="submit" value="submit" style="font-size: 20px; width: 90px;background-color: blue;color: white;">

         </form>

        </div>
      </div>

      














        <div class="row">
        <div class="col-md-12" style="background-color: #131313;color: white;text-align: center;height: 100px;">
          <br>
          <hr>
          Copyright © 2018 Shamim Reza
        </div>
      </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>