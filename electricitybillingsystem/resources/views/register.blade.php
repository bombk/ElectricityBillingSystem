<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    </head>
        <body>
        <h3>Register User</h3>

            <form class="" action="{{URL::to('store')}}" method="post">
            @csrf   
                    <label>Name</label><br><br>
                    <input type="text" name="name" placeholder="Enter Name" value=""><br><br>
                    <label>Email</label><br><br>
                    <input type="text" name="email" placeholder="Enter Email" value=""><br><br>
                    <label>Password</label><br><br>
                    <input type="password" name="password" placeholder="Password" value=""><br><br>
            
                 <button type="submit" name="button">Register</button>
            </form>
            <br><br>
            <a href="/">Click Here to Login</a>
         
        </body>
</html>
