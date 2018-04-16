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
           