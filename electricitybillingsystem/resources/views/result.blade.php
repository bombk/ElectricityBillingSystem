@extends('layout')
@section('title','Result')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="css/main.css" rel="stylesheet">

<body>
    <h3> Total Unit = {{session('unit')}} Unit</h3>
    <table id="table">
        <tr>

            <td>KW/HR</td>
            <td>Amount</td>

        </tr>
        <td>0-10</td>
        <td>{{session('unitCost0')}}</td>
        </tr>

        </tr>
        <td>10-20</td>
        <td>{{session('unitCost')}}</td>
        </tr>

        </tr>
        <td>21-30</td>
        <td>{{session('unitCost1')}}</td>
        </tr>

        </tr>
        <td>31-50</td>
        <td>{{session('unitCost2')}}</td>
        </tr>

        </tr>
        <td>51-100</td>
        <td>{{session('unitCost3')}}</td>
        </tr>

        </tr>
        <td>101-150</td>
        <td>{{session('unitCost4')}}</td>
        </tr>

        </tr>
        <td>151-250</td>
        <td>{{session('unitCost5')}}</td>
        </tr>

        </tr>
        <td>251-400</td>
        <td>{{session('unitCost6')}}</td>
        </tr>

        </tr>
        <td>401 Above</td>
        <td>{{session('unitCost7')}}</td>
        </tr>

        </tr>
        <td>Total Amount</td>
        <td>{{session('calc')}}</td>
        </tr>

    </table><br><br>
    <h3>Total Amout = Rs. {{session('calc')}}</h3><br>
</body>

</html>