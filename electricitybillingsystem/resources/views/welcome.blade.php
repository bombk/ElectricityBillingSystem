@extends('layout')
@section('title','Home')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cascaded Category</title>
    <!-- Bootstrap CSS -->

</head>
<link href="css/main.css" rel="stylesheet">
<body>



    <h3>Ampere Category<span class="gcolor"></span> </h3>

    <select class="form-control formselect required" placeholder="Select Category" id="select">
        <option value="0" disabled selected>Select
            Ampere</option>
        @foreach($data as $categories)
        <option value="{{ $categories->id }}">
            {{ ucfirst($categories->amp_id) }}
        </option>
        @endforeach
    </select>
<br><br>
<table id="select">
    <tr >

        <td>KW/HR</td>
        <td>Min Amount</td>
        <td>Energy Rate</td>

    </tr></table>

    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <table id="table">

    </table>
</br></br>
    <form id="form" method="post" action="{{URL::to('calculate2/{id}')}}">
        @csrf
        <input type="number" min="0" required placeholder="Enter Total Unit" name="unit">
        <input type="submit" value="Calculate" name="submit">
    </form>
  
</body>
<script>
        $(document).ready(function() {
            $('#select').on('change', function() {
                let id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: 'GetSubCatAgainstMainCatEdit/' + id,
                    success: function(response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        $('#table').empty();

                        response.forEach(element => {
                            $('#table').append(`
                    <tr>
                    <td>${element['range']}</td>
                    <td>${element['minamt']}</td>
                    <td>${element['energyrate']}</td>
                    </tr>`);
                        });
                    }
                });
            });
        });

    </script>

</html>