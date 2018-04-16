<!DOCTYPE html>
<html>
<head>
  <title>edit page</title>
</head>
<body>

  

  <form action="catchValue" method="post">
      Day: 
      <select required id="day">
        <option value="">None</option>
        <option value="">Saturday</option>
        <option value="">Sunday</option>
        <option value="">MonDay</option>
        <option value="">Tuseday</option>
        <option value="">WednesDay</option>
        <option value="">ThusDay</option>
      </select>

      Time:
     <select required>
       <option value="">None</option>
       <option value="">10.00-11.30</option>
       <option value="">11.30-1.00</option>
       <option value="">1.00-2.30</option>
       <option value="">2.30-4.00</option>
     </select> 

     Time:
     <select required>
       <option value="">None</option>
       <option value="">No</option>
       <option value="">Yes</option>
       
     </select>

     <input type="submit" value="Submit">
  </form>




</body>
</html>