<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class DB_Work extends Controller
{
    function select(){
        $result=DB::table('5amp')->select('minAmt','energyRate')->get();
       // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
        echo '<pre>';
        print_r($result);
        
        $result=DB::table('15amp')->select('minAmt','energyRate')->get();
        // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
         echo '<pre>';
         print_r($result);

         $result=DB::table('30amp')->select('minAmt','energyRate')->get();
         // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
          echo '<pre>';
          print_r($result);

          $result=DB::table('60amp')->select('minAmt','energyRate')->get();
          // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
           echo '<pre>';
           print_r($result);
   }
   public  function store(Request $request){
    // print_r($request->input());
     $name=$request->input('name');
     $email=$request->input('email');
     $password=$request->input('password');

     DB::insert('insert into user(name,email,password) values(?,?,?)',[$name,$email,$password]);
     echo "Register Sucessful";
    
  }
 public function logs(Request $request){
  
        $name=$request->input('name');
       $password=$request->input('password');

          $data=DB::select('select id from user where name=? and password=?',[$name,$password]);
       if(count($data)){
           return redirect('select');
         
          
       }
       else{
           echo "Name or Password incorrect";
       }
    }
}
