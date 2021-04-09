@extends('layout')
@section('title','Home')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->

</head>
<link href="css/main.css" rel="stylesheet">

<body>
@csrf



    <h3>Ampere Category<span class="gcolor"></span> </h3>

    <select id="select" required>
        <option value="0" disabled selected>Select
            Ampere</option>
        @foreach($data as $categories)
        <option value="{{ $categories->id }}">
            {{ ucfirst($categories->amp_id) }}
        </option>
        @endforeach
    </select>
    <br><br>


    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

    <table id="table">

    </table>

    </br></br>
    <form id="form" method="post" action="{{URL::to('calculate')}}">
        @csrf
        <input type="number" min="0" required placeholder="Enter Total Unit" name="unit">
        <input type="text" readonly="readonly" hidden required name="id" id="txtresults" /><br><br>
        <input type="submit" value="Calculate" name="submit">


    </form>

</body>
<script>
    $(document).ready(function() {
        $('#select').on('change', function() {
            let id = $(this).val();

            $('#txtresults').val(id); //text value

            $.ajax({
                type: 'GET',
                url: 'GetTableDetails/' + id,
                success: function(response) {
                    var response = JSON.parse(response);
                    console.log(response);
                    $('#table').empty();
                    $('#table').append('<tr><td>KW/HR Range</td><td>Min Amount</td><td>Energy Rate</td></tr>');

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