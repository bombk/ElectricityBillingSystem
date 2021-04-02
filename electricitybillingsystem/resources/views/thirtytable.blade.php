<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>30 Amp</title>
    

       
           
        </style>
    </head>
    <body class="">
    <select>
        <option>5 Amp</option>
        <option>15 Amp</option>
        <option>30 Amp</option>
        <option>60 Amp</option>
    </select>
    <br></br>
    <h3> 30 Ampare Table</h3>
    <table border="2">
        <tr>
          
            <td>KW/HR</td>
            <td>Min Amount</td>
            <td>Energy Rate</td>
        
        </tr>
        @foreach($result as $data)
        <tr>
        
            <td>{{$data->kwprhr}}</td>
            <td>{{$data->minAmt}}</td>
            <td>{{$data->energyRate}}</td>
        </tr>
        @endforeach
    </table>
    <br><br>
   
   <form method="post" action="{{URL::to('calculate2')}}">
   @csrf
    <input type="number" placeholder="Enter Total Unit" name="unit">
    <input type="submit" value="Calculate" name="submit">
   </form>
        
    </body>
</html>
