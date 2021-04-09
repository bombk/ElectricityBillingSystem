<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

</head>
<link href="css/main.css" rel="stylesheet">

<body>
@csrf

    <p style="margin-left: 30%;">{{session('msg')}}</p>
    <br><br>
    <h3>Login User</h3>
    <form id="form" class="" action="{{URL::to('logs')}}" method="post">
        @csrf
        <label>Name</label><br><br>
        <input type="text" name="name" required placeholder="Enter name" value=""><br><br>
        <label>Password</label><br><br>
        <input type="password" name="password" required placeholder="Enter password" value=""><br><br>
        <button type="submit" name="button">Login</button>
    </form>
    <br><br>
    <a style="margin-left: 30%;" href="register">Click Here to Register</a>

</body>

</html>