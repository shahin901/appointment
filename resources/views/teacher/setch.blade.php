<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Insert Counselling Hours</title>

    <!-- Bootstrap -->
   
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: red;
    color: white;
    text-align: center;
}
</style>


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
                 <a class="navbar-brand" href="index">Home</a>
                </div>
 <!-- Collect the nav links, forms, and other content for toggling -->
               
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right" style="display: inline;">
                   
                 <!--  <li class="active"><a href="profile2">Profile<span class="sr-only">(current)</span></a></li> -->
                 
                    <li><a href="request">Rquest List</a></li>
                    <li><a href="approved">Appoint List</a></li> 
                    <li><a href="counselling">Counselling Time</a></li>
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                  
                  </ul>
                
                  </div><!-- /.navbar-collapse -->
               </div><!-- /.container-fluid -->
            </nav>
         </div>
       </div>  



       <div class="row">
        <div class="col-md-12" style="padding: 90px 50px 00px 40px;color: black">
         
             <form action="setchour" method="post">

           Day :
          <!-- <input type="text" name="Day"> -->
           
           <select name="Day" style="width: 500px;" required>
              
              <option value="">Select</option>
              <option value="Saturday">Saturday</option>
              <option value="Sunday">Sunday</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
            </select>
            <br>  
            <br>  

            <table border="1|0" style="width: 100%;height:100px; text-align: center;">
              <tr>
                <th style="text-align: center;">10-11</th>
                <th style="text-align: center;">11-12</th>
                <th style="text-align: center;">12-01</th>
                <th style="text-align: center;">01-02</th>
                <th style="text-align: center;">02-03</th>
              </tr>
              <tr>
                <td> 
                 <select name="10-11" required>
                    <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  
                  </select>
                </td>

                <td>
                  
                    <select name="11-12" required>
                     <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  
                  </select>
                </td> 

                 <td>
                  
                    <select name="12-01" required>
                     <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  
                  </select>
                </td> 

                 <td>
                  
                    <select name="01-02" required>
                     <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  
                  </select>
                </td>

                <td>
                    <select name="02-03" required>
               <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            
            </select>
                </td>

              </tr>
            </table>

<br>
<br>

               <input type="hidden" name="_token" value="{{ csrf_field() }}"/>
                <input type="submit" name="submit" value="submit" style="font-size: 20px; width: 90px;background-color: blue;color: white;">


         </form>

         </div>
         </div>

<!--

            <label>10.00-11.30</label>
            Counseling option : 
           <select name="10-11" >
              <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            
            </select>
            <br>
            <br>
  
  <label>11.30-1.00</label>
            Counseling option : 
           <select name="11-12" >
               <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            
            </select>
            <br>
            <br>
  
  <label >1.00-2.30</label>
            Counseling option : 
           <select name="12-01" >
               <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            
            </select>
            <br>
            <br>
  <label>2.30-4.00</label>
            Counseling option : 
           <select name="01-02" >
               <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            
            </select>
            <br>
            <br>

               <label>4.00-5.30</label>
            Counseling option : 
           <select name="02-03" >
               <option value="">Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            
            </select>
            <br>
            <br>

          -->
                
             

        


       

      <div class="footer">
        <div class="col-md-12" style="background-color: #131313;color: white;text-align: center;height: 100px;">
          <br>
          <hr>
          Copyright © 2018 Shamim Reza
        </div></div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>