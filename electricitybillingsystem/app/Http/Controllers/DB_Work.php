<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Amp;
use App\Models\User;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Crypt;

class DB_Work extends Controller
{
    function select(){
      $result= Amp::find(1)->getAmpDetails;
      
      return view('home',compact('result'));
   }
  
    public function calculate(Request $req){
      
      $minAmt=Amp::find(1)->getAmpDetails->pluck('minamt');

      $energyRate=Amp::find(1)->getAmpDetails->pluck('energyrate');

          $unit= $req->unit;
         


          if($unit <=10){
           
            $unitCost0=0;
            $req->session()->flash('unit',$unit);
            
            $req->session()->flash('unitCost0',$unitCost0);
        // echo "Calculation! <br><br> Total Unit ".$unit;
          $calc=$minAmt[0]+$unit*$energyRate[0];
         
          $req->session()->flash('calc',$calc);
          return redirect('result');
    
         // echo "<br><br>Total Amount is Rs. ".$calc;

          }
          else if($unit >10 && $unit <= 20){
              $unitCost0=0;
              $req->session()->flash('unit',$unit);

              $req->session()->flash('unitCost0',$unitCost0);

              $unitCost=$unit*$energyRate[1];
              $req->session()->flash('unitCost',$unitCost);
           // echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
           
            $calc=$minAmt[1]+$unitCost;
            $req->session()->flash('calc',$calc);
            return redirect('result');
      

           // return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 20 && $unit <= 30){

            $unitCost0=0;
            $req->session()->flash('unit',$unit);
              
            $req->session()->flash('unitCost0',$unitCost0);
          
            $unitCost=20*$energyRate[1];
            $req->session()->flash('unitCost',$unitCost);

            $unitCost1=($unit-20)*$energyRate[2];
            $req->session()->flash('unitCost1',$unitCost1);

           // echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
           // echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";

            $calc=$minAmt[2]+$unitCost+$unitCost1;

            $req->session()->flash('calc',$calc);
            return redirect('result');

           // return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 30 && $unit <= 50){

            $unitCost0=0;
            $req->session()->flash('unit',$unit);
              
            $req->session()->flash('unitCost0',$unitCost0);

            $unitCost=20*$energyRate[1];
            $req->session()->flash('unitCost',$unitCost);

            $unitCost1=10*$energyRate[2];
            $req->session()->flash('unitCost1',$unitCost1);

            $unitCost2=($unit-30)*$energyRate[3];
            $req->session()->flash('unitCost2',$unitCost2);


           // //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
           // echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
           // echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
           
            $calc=$minAmt[3]+$unitCost+$unitCost1+$unitCost2;

            $req->session()->flash('calc',$calc);
            return redirect('result');

           // return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 50 && $unit <= 100){

            $unitCost0=0;
            $req->session()->flash('unit',$unit);
              
            $req->session()->flash('unitCost0',$unitCost0);

            $unitCost=20*$energyRate[1];
            $req->session()->flash('unitCost',$unitCost);

            $unitCost1=10*$energyRate[2];
            $req->session()->flash('unitCost1',$unitCost1);

            $unitCost2=20*$energyRate[3];
            $req->session()->flash('unitCost2',$unitCost2);

            $unitCost3=($unit-50)*$energyRate[4];
            $req->session()->flash('unitCost3',$unitCost3);


           // echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
            //echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
            //echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
           // echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
           
            $calc=$minAmt[4]+$unitCost+$unitCost1+$unitCost2+$unitCost3;

            $req->session()->flash('calc',$calc);
            return redirect('result');
            
           // return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 100 && $unit <= 150){
            $unitCost0=0;
            $req->session()->flash('unit',$unit);
              
            $req->session()->flash('unitCost0',$unitCost0);

            $unitCost=20*$energyRate[1];
            $req->session()->flash('unitCost',$unitCost);

            $unitCost1=10*$energyRate[2];
            $req->session()->flash('unitCost1',$unitCost1);

            $unitCost2=20*$energyRate[3];
            $req->session()->flash('unitCost2',$unitCost2);

            $unitCost3=50*$energyRate[4];
            $req->session()->flash('unitCost3',$unitCost3);

            $unitCost4=($unit-100)*$energyRate[5];
            $req->session()->flash('unitCost4',$unitCost4);


           // echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
           // echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
           // echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
           // echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
           // echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
           
            $calc=$minAmt[5]+$unitCost+$unitCost1+$unitCost2+$unitCost3+$unitCost4;
            $req->session()->flash('calc',$calc);
            return redirect('result');

           // return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 150 && $unit <= 250){

            $unitCost0=0;
            $req->session()->flash('unit',$unit);
              
            $req->session()->flash('unitCost0',$unitCost0);

            $unitCost=20*$energyRate[1];
            $req->session()->flash('unitCost',$unitCost);

            $unitCost1=10*$energyRate[2];
            $req->session()->flash('unitCost1',$unitCost1);

            $unitCost2=20*$energyRate[3];
            $req->session()->flash('unitCost2',$unitCost2);

            $unitCost3=50*$energyRate[4];
            $req->session()->flash('unitCost3',$unitCost3);
            
            $unitCost4=50*$energyRate[5];
            $req->session()->flash('unitCost4',$unitCost4);
            $unitCost5=($unit-150)*$energyRate[6];
            $req->session()->flash('unitCost5',$unitCost5);


           // echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          //  echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
           // echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          //  echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
          //  echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
          //  echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
           
            $calc=$minAmt[6]+$unitCost+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5;
            $req->session()->flash('calc',$calc);
            return redirect('result');

          //  return "Total Amount is Rs. ".$calc;

          }
          else if($unit > 250 && $unit <= 400){
            $unitCost0=0;
            $req->session()->flash('unit',$unit);
              
            $req->session()->flash('unitCost0',$unitCost0);


            $unitCost=20*$energyRate[1];
            $req->session()->flash('unitCost',$unitCost);

            $unitCost1=10*$energyRate[2];
            $req->session()->flash('unitCost1',$unitCost1);

            $unitCost2=20*$energyRate[3];
            $req->session()->flash('unitCost2',$unitCost2);

            $unitCost3=50*$energyRate[4];
            $req->session()->flash('unitCost3',$unitCost3);
            
            $unitCost4=50*$energyRate[5];
            $req->session()->flash('unitCost4',$unitCost4);

            $unitCost5=100*$energyRate[6];
            $req->session()->flash('unitCost5',$unitCost5);

            $unitCost6=($unit-250)*$energyRate[7];
            $req->session()->flash('unitCost6',$unitCost6);

           // echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
           // echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
           // echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
           // echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
           // echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
           // echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
           // echo "251-400 Unit Cost Rs. ".$unitCost6."<br><br>";
           
            $calc=$minAmt[7]+$unitCost+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5+$unitCost6;
            $req->session()->flash('calc',$calc);
            return redirect('result');

           // return "Total Amount is Rs. ".$calc;

          }
          
          else{

            $unitCost0=0;
            $req->session()->flash('unit',$unit);
              
            $req->session()->flash('unitCost0',$unitCost0);

            $unitCost=20*$energyRate[1];
            $req->session()->flash('unitCost',$unitCost);

            $unitCost1=10*$energyRate[2];
            $req->session()->flash('unitCost1',$unitCost1);

            $unitCost2=20*$energyRate[3];
            $req->session()->flash('unitCost2',$unitCost2);

            $unitCost3=50*$energyRate[4];
            $req->session()->flash('unitCost3',$unitCost3);
            
            $unitCost4=50*$energyRate[5];
            $req->session()->flash('unitCost4',$unitCost4);

            $unitCost5=100*$energyRate[6];
            $req->session()->flash('unitCost5',$unitCost5);

            $unitCost6=150*$energyRate[7];
            $req->session()->flash('unitCost6',$unitCost6);
            $unitCost7=($unit-400)*$energyRate[8];
            $req->session()->flash('unitCost7',$unitCost7);

            //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
            //echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
           // echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
            //echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
            //echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
            //echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
           // echo "251-400 Unit Cost Rs. ".$unitCost6."<br><br>";
            //echo "401 Above Unit Cost Rs. ".$unitCost7."<br><br>";
           
            $calc=$minAmt[8]+$unitCost+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5+$unitCost6+$unitCost7;
            
            $req->session()->flash('calc',$calc);
            return redirect('result');

            //return "Total Amount is Rs. ".$calc;
          }

    }
}
