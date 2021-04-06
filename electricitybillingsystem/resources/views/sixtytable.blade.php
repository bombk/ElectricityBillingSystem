@extends('layout')
@section('title','60Amp')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <link href="css/main.css" rel="stylesheet">
    <body class="">
    <h3>Select Ampere</h3>
        <select id="url" onchange="urlHandler(this.value)">
            <option value="{{URL::to('sixtytable')}}">60 Ampere</option>
            <option value="{{URL::to('home')}}">5 Ampere</option>
            <option value="{{URL::to('fifteentable')}}">15 Ampere</option>
            <option value="{{URL::to('thirtytable')}}">30 Ampere</option>
           
        </select>
    <br></br>
    <h3>60 Ampare Table</h3>
    <table id="table">
        <tr>
          
            <td>KW/HR</td>
            <td>Min Amount</td>
            <td>Energy Rate</td>
        
        </tr>
        @foreach($result as $data)
        <tr>
            <td>{{$data->range}}</td>
            <td>{{$data->minamt}}</td>
            <td>{{$data->energyrate}}</td>
        @endforeach
    </table>
    <br><br>
   
   <form id="form" method="post" action="{{URL::to('calculate3')}}">
   @csrf
    <input type="number" min="0" required placeholder="Enter Total Unit" name="unit">
    <input type="submit" value="Calculate" name="submit">
   </form>
        
    </body>
       
       <script>
    function urlHandler(value) {                               
        window.location.assign(`${value}`);
    }
    </script>
</html>
