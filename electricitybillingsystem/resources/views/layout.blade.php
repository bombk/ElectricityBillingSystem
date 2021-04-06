<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')-page</title>
</head>

<style>

    .header{
        color:blue;
    }
    .content{
        color: blue;
    }
</style>
<body>
    <div class="header">
        @section('header')
        @show
            <p>User {{session('user')}}</p>
            <a href="{{URL::to('logout')}}">logout</a>
    </div>
    <div class="content">
        @section('content')
            @show

    </div>
    
</body>
</html>