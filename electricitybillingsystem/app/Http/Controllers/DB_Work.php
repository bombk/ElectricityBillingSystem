<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_Work extends Controller
{
    function select(){
        $result=DB::table('5amp')->select('minAmt','energyRate')->get();
       // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();
        
        echo '<pre>';
        print_r($result);

   }
}
