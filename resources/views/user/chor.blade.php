<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Counselling Hours</title>

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

               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right" style="display: inline;">
                   
                  <!--   <li><a href="stuProfile">Profile</a></li> -->
                           <li><a href="cht">Counselling Time</a></li>
                          <!--  <li><a href="contact">Contact</a></li>-->
                           <li><a href="appoint">Appoinment</a></li>
                           <li><a href="logout">Log Out</a></li>
                  </ul>
                
                  </div><!-- /.navbar-collapse -->
               </div><!-- /.container-fluid -->
            </nav>
         </div>
         </div>



       <div class="row">
        <div class="col-md-12" style="padding: 90px 50px 00px 40px;color: black">
           
               <div class="request_table">
           
         <table border="1|0" style="width:100% ;text-align:center;" >
            <tr>
              
                <td>Day</td>
                <td>10-11</td>
                <td>11-12</td>
                <td>12-01</td>
                <td>01-02</td>
                <td>02-03</td>
             
            </tr>


                @foreach($data as $value)
                <tr>
                    <td>{{$value->d}}</td>
                    <td>{{$value->twentytwo}}</td>
                    <td>{{$value->twentytwo2}}</td>
                    <td>{{$value->twentytwo3}}</td>
                    <td>{{$value->twentytwo4}}</td>
                    <td>{{$value->twentytwo5}}</td>                   
                                     
                </tr>
  
            @endforeach
             
        </table>
           
           </div>   

        </div>
      </div>

        <div class="row">
            <div style="float: right;margin-right: 30px;padding-top: 30px;font-size: 24px;">
              <a href="cht">Back to Previous Page</a>
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