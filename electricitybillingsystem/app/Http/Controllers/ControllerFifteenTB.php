<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use App\Models\Amp;

class ControllerFifteenTB extends Controller
{
    function select(){
      $result= Amp::find(2)->getAmpDetails;
      
      return view('fifteentable',compact('result'));
   }

   public function calculate(Request $req){  
          
    $minAmt=Amp::find(2)->getAmpDetails->pluck('minamt');

    $energyRate=Amp::find(2)->getAmpDetails->pluck('energyrate');

        $unit= $req->unit;


        if($unit <=10){
          $req->session()->flash('unit',$unit);
          $unitCost0=$unit*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);

          $calc=$minAmt[0]+$unitCost0;

          $req->session()->flash('calc',$calc);
          return redirect('result');

       // echo "Calculation! <br><br> Total Unit ".$unit;
       // echo "<br><br>0-10 Unit Cost Rs. ".$unitCost0;
      //   echo "<br><br>Total Amount is Rs. ".$calc;

        }
        else if($unit >10 && $unit <= 20){
          $req->session()->flash('unit',$unit);
            $unitCost0=10*$energyRate[0];
            $req->session()->flash('unitCost0',$unitCost0);
            $unitCost=($unit-10)*$energyRate[1];
            $req->session()->flash('unitCost//',$unitCost);
         // echo "Calculation! <br><br> Total Unit ".$unit.
          //"<br><br>0-10 Unit Cost Rs. ".$unitCost0.
         // "<br><br>10-20 Unit Cost Rs. ".$unitCost;
         
          $calc=$minAmt[1]+$unitCost0+$unitCost;
          $req->session()->flash('calc',$calc);
          return redirect('result');

         // return "<br><br>Total Amount is Rs. ".$calc;

        }
        else if($unit > 20 && $unit <= 30){
          $req->session()->flash('unit',$unit);

          $unitCost0=10*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);
        
          $unitCost=10*$energyRate[1];
          $req->session()->flash('unitCost',$unitCost);

          $unitCost1=($unit-20)*$energyRate[2];
          $req->session()->flash('unitCost1',$unitCost1);

          //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-10 Unit Cost Rs. ".
         // $unitCost0."<br><br>11-20 Unit Cost Rs. ".$unitCost;
         // echo "<br><br>21-30 Unit Cost Rs. ".$unitCost1."<br><br>";

          $calc=$minAmt[2]+$unitCost0+$unitCost+$unitCost1;

          $req->session()->flash('calc',$calc);
          return redirect('result');
         // return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 30 && $unit <= 50){
          $req->session()->flash('unit',$unit);

          $unitCost0=10*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);
          $unitCost=10*$energyRate[1];
          $req->session()->flash('unitCost',$unitCost);
          $unitCost1=10*$energyRate[2];
          $req->session()->flash('unitCost1',$unitCost1);

          $unitCost2=($unit-30)*$energyRate[3];
          $req->session()->flash('unitCost2//',$unitCost2);


          //echo "Calculation! <br><br> Total Unit ".$unit.
          //"<br><br>0-10 Unit Cost Rs. ".$unitCost0."<br><br>";
         // "<br><br>11-20 Unit Cost Rs. ".$unitCost."<br><br>";
         // echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          //echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
         
          $calc=$minAmt[3]+$unitCost0+$unitCost+$unitCost1+$unitCost2;

          $req->session()->flash('calc',$calc);
          return redirect('result');

         // return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 50 && $unit <= 100){
          $req->session()->flash('unit',$unit);

          $unitCost0=10*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);
        
          $unitCost=20*$energyRate[1];
          $req->session()->flash('unitCost',$unitCost);

          $unitCost1=10*$energyRate[2];
          $req->session()->flash('unitCost1',$unitCost1);

          $unitCost2=20*$energyRate[3];
          $req->session()->flash('unitCost2',$unitCost2);

          $unitCost3=($unit-50)*$energyRate[4];
          $req->session()->flash('unitCost3',$unitCost3);


          //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-10 Unit Cost Rs. ".$unitCost0."<br><br>";
         // echo "11-20 Unit Cost Rs. ".$unitCost."<br><br>";
          //echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
         // echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
         // echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
         
          $calc=$minAmt[4]+$unitCost0+$unitCost1+$unitCost1+$unitCost2+$unitCost3;
          $req->session()->flash('calc',$calc);
          return redirect('result');

          //return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 100 && $unit <= 150){
          $req->session()->flash('unit',$unit);

          $unitCost0=10*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);

          $unitCost=10*$energyRate[1];
          $req->session()->flash('unitCost',$unitCost);

          $unitCost1=10*$energyRate[2];
          $req->session()->flash('unitCost1',$unitCost1);

          $unitCost2=20*$energyRate[3];
          $req->session()->flash('unitCost2',$unitCost2);

          $unitCost3=50*$energyRate[4];
          $req->session()->flash('unitCost3',$unitCost3);

          $unitCost4=($unit-100)*$energyRate[5];
          $req->session()->flash('unitCost4',$unitCost4);


          //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-10 Unit Cost Rs. ".$unitCost0."<br><br>";
          //echo "11-20 Unit Cost Rs. ".$unitCost."<br><br>";
          //echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          //echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          //echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
          //echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
         
          $calc=$minAmt[5]+$unitCost1+$unitCost1+$unitCost2+$unitCost3+$unitCost4;

          $req->session()->flash('calc',$calc);
          return redirect('result');

          //return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 150 && $unit <= 250){
          $req->session()->flash('unit',$unit);

          $unitCost0=10*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);

          $unitCost=10*$energyRate[1];
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


          //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-10 Unit Cost Rs. ".$unitCost0."<br><br>";
          //echo "11-20 Unit Cost Rs. ".$unitCost."<br><br>";
          //echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          //echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
         // echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
         // echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
         // echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
         
          $calc=$minAmt[6]+$unitCost0+$unitCost+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5;

          $req->session()->flash('calc',$calc);
          return redirect('result');


         // return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 250 && $unit <= 400){
          $req->session()->flash('unit',$unit);

          $unitCost0=10*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);

          $unitCost=10*$energyRate[1];
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

          //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-10 Unit Cost Rs. ".$unitCost0."<br><br>";
          //echo "11-20 Unit Cost Rs. ".$unitCost."<br><br>";
          //echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          //echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          //echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
         // echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
          //echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
         // echo "251-400 Unit Cost Rs. ".$unitCost6."<br><br>";
         
          $calc=$minAmt[7]+$unitCost0+$unitCost+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5+$unitCost6;
         
          $req->session()->flash('calc',$calc);
            return redirect('result');

          //return "Total Amount is Rs. ".$calc;

        }
        
        else{
          $req->session()->flash('unit',$unit);

          $unitCost0=10*$energyRate[0];
          $req->session()->flash('unitCost0',$unitCost0);
          $unitCost=10*$energyRate[1];
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

          //echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-10 Unit Cost Rs. ".$unitCost0."<br><br>";
          //echo "11-20 Unit Cost Rs. ".$unitCost."<br><br>";
         // echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
         // echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
         // echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
         // echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
         // echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
         // echo "251-400 Unit Cost Rs. ".$unitCost6."<br><br>";
         // echo "401 Above Unit Cost Rs. ".$unitCost7."<br><br>";
         
          $calc=$minAmt[8]+$unitCost0+$unitCost+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5+$unitCost6+$unitCost7;
          
          $req->session()->flash('calc',$calc);
          return redirect('result');

          //return "Total Amount is Rs. ".$calc;
        }

  }
}
