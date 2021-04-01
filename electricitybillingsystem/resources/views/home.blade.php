<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    

       
           
        </style>
    </head>
    <body class="">
    <h3> 5 Ampare Table</h3>
    <table border="2">
        <tr>
            <td>Id</td>
            <td>KW/HR</td>
            <td>Min Amount</td>
            <td>Energy Rate</td>
        
        </tr>
        @foreach($result as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->kwprhr}}</td>
            <td>{{$data->minAmt}}</td>
            <td>{{$data->energyRate}}</td>
        </tr>
        @endforeach
    </table>
   
   <form method="post" action="{{URL::to('calculate')}}">
   @csrf
    <input type="number" placeholder="Enter Total Unit" name="unit">
    <input type="submit" value="Calculate" name="submit">
   </form>
        
    </body>
</html>
