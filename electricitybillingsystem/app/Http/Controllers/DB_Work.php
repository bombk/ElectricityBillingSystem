<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\Amp;

class DB_Work extends Controller
{
    function select(){
      $result= Amp::find(1)->getAmpDetails;
      
      return view('home',compact('result'));
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

      $minAmt=Amp::find(1)->getAmpDetails->pluck('minamt');

      $energyRate=Amp::find(1)->getAmpDetails->pluck('energyrate');

          $unit= $req->unit;


          if($unit<=10){
            $qmlv=0;

           $calc=$minAmt[0]+$qmlv+$unit*$energyRate[0];
         
          echo "Total Amount is Rs. ".$calc;

          }
          else if($unit >10 && $unit <= 20){
            $qmlv=0;
           
  
           $calc=$minAmt[1]+$qmlv+$unit*$energyRate[1];
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 20 && $unit <= 30){
            $qmlv=60;
           
           $calc=$minAmt[2]+$qmlv+($unit-20)*$energyRate[2];
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 30 && $unit <= 50){
            $qmlv=125;
          
            $calc=$minAmt[3]+$qmlv+($unit-30)*$energyRate[3];
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 50 && $unit <= 100){
            $qmlv=285;
           
           
            $calc=$minAmt[4]+$qmlv+($unit-50)*$energyRate[4];
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 100 && $unit <= 150){
            $qmlv=760;
           
           
            $calc=$minAmt[5]+$qmlv+($unit-100)*$energyRate[5];
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 150 && $unit <= 250){
            $qmlv=1235;
           
           
            $calc=$minAmt[6]+$qmlv+($unit-150)*$energyRate[6];
            return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 250 && $unit <= 400){
            $qmlv=2235;
          
           
            $calc=$minAmt[7]+$qmlv+($unit-250)*$energyRate[7];
            return "Total Amount is Rs. ".$calc;

          }
          
          else{
            $qmlv=4035;
           

            $calc=$minAmt[8]+$qmlv+($unit-400)*$energyRate[8];
            return "Total Amount is Rs. ".$calc;
          }

    }
}
