<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

</head>
<link href="css/main.css" rel="stylesheet">

<body>
    <h3>Register User</h3>

    <form id="form" class="" action="{{URL::to('store')}}" method="post">
        @csrf
        <label>Name</label><br><br>
        <input type="text" name="name" placeholder="Enter Name" value=""><br>
        <span>@error('name'){{$message}}@enderror</span>
        <br>
        <label>Email</label><br><br>
        <input type="text" name="email" placeholder="Enter Email" value=""><br>
        <span>@error('email'){{$message}}@enderror</span><br>
        <label>Password</label><br><br>
        <input type="password" name="password" placeholder="Password" value=""><br>
        <span>@error('password'){{$message}}@enderror</span><br>

        <button type="submit" name="button">Register</button>
    </form>
    <br><br>
    <a style="margin-left: 30%;" href="/">Click Here to Login</a>

</body>

</html>