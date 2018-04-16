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
   
    <link href="font/css/new.css" rel="stylesheet" type="text/css"/>

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
                    <li class="active"><a href="open">Home<span class="sr-only">(current)</span></a></li>
                
                    <li><a href="sign_in">Log In</a></li>
                   
                    <li><a href="sign_up">Register</a></li>
                  
                  </ul>
                
                  </div><!-- /.navbar-collapse -->
               </div><!-- /.container-fluid -->
            </nav>
         </div>
       </div>  


  <div class="row">
      <div class="col-md-12">
          
        <div class="stu_registration">
    
       <h1>Student Sign Up Form </h1>
   
             
          <form action="stu" method="post">
               <table>
             
                    <tr>
                <td>FullName</td>
                <td> <input type="text" name="Fullname"> </td>
               </tr>
               
                
              
               <tr>
                 <td>Email </td>
                       <td> <input type="email" name="email"> </td> </td>
               </tr>
               
              <tr>
                <td>
                   password 
                  </td>
                    <td>
                       <input type="password" name="password"> <br>
                </td>
              </tr>

               <tr>
                <td>
                 Confirm  password 
                  </td>
                    <td>
                       <input type="password" name="password"> <br>
                </td>
              </tr>
                       
               
       
        <tr>
          <td>  
            <input type="hidden" name="_token" value="{{csrf_token()}}"> <br>
                <input type="submit" name="submit" value="submit" style="color: blue"> 
          </td>
      
               <td> 
                <br>
                <a href="admin"><input type="button" name="register_btn" value="Cancel"></a> </td> 
       </tr>
       
     </table>
   </form>
   
   </div>
     
  

      </div>
  </div>


        <div class="row">
            <div class="col-md-12" >
               <footer>
                  <br>
                    <hr>
                    Copyright © 2018 Shamim Reza  
               </footer>           
            </div>
        </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>