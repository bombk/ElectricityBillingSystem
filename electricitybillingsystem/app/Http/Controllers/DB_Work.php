<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class DB_Work extends Controller
{
    function select(){
        $result=DB::table('5amp')->get();
       // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
      return view('home',compact('result'));
        
       // $result=DB::table('15amp')->select('minAmt','energyRate')->get();
        // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
        // echo '<pre>';
       //  print_r($result);

        // $result=DB::table('30amp')->select('minAmt','energyRate')->get();
         // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
         // echo '<pre>';
        //  print_r($result);

          //$result=DB::table('60amp')->select('minAmt','energyRate')->get();
          // $result=DB::table('5amp')->select('minAmt')->where('kw/hr','0-10')->get();   
          // echo '<pre>';
         //  print_r($result);
   }
   public  function store(Request $request){
    // print_r($request->input());
     $name=$request->input('name');
     $email=$request->input('email');
     $password=$request->input('password');

  $data2= DB::insert('insert into user(name,email,password) values(?,?,?)',[$name,$email,$password]);
  
     //echo "Register Sucessful";
    
      $request->session()->flash('msg','Register Sucessful');
      return redirect('/');
    
    
  }
 public function logs(Request $request){
  
        $name=$request->input('name');
       $password=$request->input('password');

      $data=DB::select('select id from user where name=? and password=?',[$name,$password]);
       if(count($data)){
         return redirect('home');
         
          
       }
       else{
           echo "Name or Password incorrect";
       }
    }
    public function calculate(Request $req){
          $unit= $req->unit;

          if($unit<=10){
            $qmlv=0;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','1')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','1')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$qmlv+$unit*$finalEnRt;
      
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 10 && $unit <= 20){

            $minAmt=DB::table('5amp')->select('minAmt')->where('id','2')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','2')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$unit*$finalEnRt;
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 20 && $unit <= 30){
            $qmlv=60;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','3')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','3')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$qmlv+($unit-20)*$finalEnRt;
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 30 && $unit <= 50){
            $qmlv=125;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','4')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','4')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$qmlv+($unit-30)*$finalEnRt;
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 50 && $unit <= 100){
            $qmlv=285;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','5')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','5')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$qmlv+($unit-50)*$finalEnRt;
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 100 && $unit <= 150){
            $qmlv=760;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','6')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','6')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$qmlv+($unit-100)*$finalEnRt;
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 150 && $unit <= 250){
            $qmlv=1235;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','7')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','7')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$qmlv+($unit-150)*$finalEnRt;
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 250 && $unit <= 400){
            $qmlv=2235;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','8')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','8')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           $calc=$finalMinAmt+$qmlv($unit-250)*$finalEnRt;
            return "Total Amount is Rs. ".$calc;

          }
          
          else{
            $qmlv=4035;
            $minAmt=DB::table('5amp')->select('minAmt')->where('id','9')->get();
            $data=json_decode($minAmt);
            $finalMinAmt=$data[0]->minAmt;

            $energyRate=DB::table('5amp')->select('energyRate')->where('id','9')->get();
            $data1=json_decode($energyRate);
            $finalEnRt=$data1[0]->energyRate;
           
           // return $finalMinAmt;
           $calc=$finalMinAmt+$qmlv+($unit-400)*$finalEnRt;
            return "Total Amount is Rs. ".$calc;
          }

    }
}
