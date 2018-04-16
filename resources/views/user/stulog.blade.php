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
     

<body background="71767.jpg">

  
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

 

<div class="login">
 
    <form class="form-horizontal" action="stulogged" method="post" >
  
   <br>
   <h2 style="padding-left:50px; color:green;">Student Log In</h2>     
	  <img src="img_avatar2.png" alt="Smiley face" height="131" width="112" style="padding-left:70px;"> <br><br>

    <input type="email" placeholder="Enter Username" name="email" class="input"  required>
     <br>
   
    <input type="password" placeholder="Enter Password" name="password" class="input" required>
        <br>
        <br>
     
      
            <input type="hidden" name="_token" value="{{csrf_token()}}"> <br>
                <input type="submit" name="submit" value="submit" style="color: blue"> 
        
     <button type="button" class="button"  onclick="window.location.href='registration.php'">Registration</button> <br>	
  
    </form>
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
