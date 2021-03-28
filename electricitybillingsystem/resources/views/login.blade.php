<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    </head>
        <body>

            <form class="" action="{{URL::to('logs')}}" method="post">
            @csrf
                    <input type="text" name="name" placeholder="name" value=""><br><br>
                    <input type="password" name="password" placeholder="password" value=""><br><br>
            
                 <button type="submit" name="button">Login</button>
            </form>
         
        </body>
</html>
