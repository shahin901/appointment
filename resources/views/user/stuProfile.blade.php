<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Student profile</title>

    <!-- Bootstrap -->
   
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
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

                      <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right" style="display: inline;">
                      
                           <li><a href="stuProfile">Profile</a></li>
                           <li><a href="cht">Counselling Time</a></li>
                           <!-- <li><a href="contact">Contact</a></li> -->
                           <li><a href="appoint">Appoinment</a></li>
                           
                          
                  </ul>
                
                  </div><!-- /.navbar-collapse -->
               </div><!-- /.container-fluid -->
            </nav>
         </div>
       </div>  



       <div class="row">
          <div class="col-md-12" style="padding: 60px 50px 10px 40px;color: black;height: 640px">
           
            <h3> Student Information </h3>
            <hr>

            <div style="padding-top: 60px;padding-left: 300px;color: black;background-color: #FCFCF9;float: left;line-height: 45px;">
              Name    <br>
              Student ID   <br>
              Department <br>
              Faculty   <br>
               E-mail <br>
              Cell-Phone  
           </div>
          
          <div style="float: right;padding-right: 300px;padding-top: 60px;color: black;line-height: 45px;border-left: 1px solid black;border-color: black;width: 800px;text-align: left;padding-left: 30px;">
        
           <!--  Md. Shamim Reza <br>
             151-35-901    <br>
           
             Department of Software Engineering <br>
             Faculty of Science and Information Technology <br>
             
             shamim.swe@diu.edu.bd <br>
                              
             01714458644
        -->

                @foreach($data as $value)
                <tr>
                    <td>{{$value->Name}}</td> <br>
                    <td>{{$value->sID}}</td>  <br>
                    <td>{{$value->Department}}</td> <br>
                    <td>{{$value->Faculty}}</td> <br>
                    <td>{{$value->Cell}}</td>  <br>
                    <td>{{$value->mail}}</td>                   
                                     
                </tr>
  
            @endforeach
           </div>
         <button>Edit Profile</button>
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