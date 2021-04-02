<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    </head>
        <body>
        <h3>Register User</h3>

            <form class="" action="{{URL::to('store')}}" method="post">
            @csrf
                    <input type="text" name="name" placeholder="name" value=""><br><br>
                    <input type="text" name="email" placeholder="email" value=""><br><br>
                    <input type="password" name="password" placeholder="password" value=""><br><br>
            
                 <button type="submit" name="button">Register</button>
            </form>
         
        </body>
</html>
