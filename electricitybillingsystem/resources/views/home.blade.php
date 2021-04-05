<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
       

        <title>5 Amp</title>
    
        <link href="css/main.css" rel="stylesheet">
    </head>
    <di class="container">
    <body >
    <h3>Select Ampere</h3>
      <div class="select">  
                <select id="url" onchange="urlHandler(this.value)">
                        <option value="{{URL::to('home')}}">5 Ampere</option>
                        <option value="{{URL::to('fifteentable')}}">15 Ampere</option>
                        <option value="{{URL::to('thirtytable')}}">30 Ampere</option>
                        <option value="{{URL::to('sixtytable')}}">60 Ampere</option>
                </select>
      </div>
    <br></br>
    <h3> 5 Ampare Table</h3>

    <div class="table">
            <table >
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
                </tr>
                @endforeach
            </table>
            <br><br>
    </div>
   
   <div class="input">
            <form method="post" action="{{URL::to('calculate')}}">
            @csrf
                <input type="number" min="0" placeholder="Enter Total Unit" name="unit">
                <input type="submit" value="Calculate" name="submit">
            </form>
        
   </div>
  <p>{{session('user')}}</p>
    </body>
</div>
    <script>
 function urlHandler(value) {                               
    window.location.assign(`${value}`);
}
</script>
</html>
