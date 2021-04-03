<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>60 Amp</title>
    

       
           
        </style>
    </head>
    <body class="">
    <select id="url" onchange="urlHandler(this.value)">
            <option disabled selected value>Select Option</option>
            <option value="{{URL::to('home')}}">5 Ampere</option>
            <option value="{{URL::to('fifteentable')}}">15 Ampere</option>
            <option value="{{URL::to('thirtytable')}}">30 Ampere</option>
            <option value="{{URL::to('sixtytable')}}">60 Ampere</option>
        </select>
    <br></br>
    <h3>60 Ampare Table</h3>
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
   
   <form method="post" action="{{URL::to('calculate3')}}">
   @csrf
    <input type="number" placeholder="Enter Total Unit" name="unit">
    <input type="submit" value="Calculate" name="submit">
   </form>
        
    </body>
    <script>
 function urlHandler(value) {                               
    window.location.assign(`${value}`);
}
</script>
</html>
