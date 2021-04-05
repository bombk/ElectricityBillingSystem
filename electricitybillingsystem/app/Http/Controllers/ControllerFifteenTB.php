<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
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
          
       
        echo "Calculation! <br><br> Total Unit ".$unit;
        
        $calc=$minAmt[0]+$unit*$energyRate[0];
         echo "<br><br>Total Amount is Rs. ".$calc;

        }
        else if($unit >10 && $unit <= 20){
            $unitCost=$unit*$energyRate[1];
          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
         
          $calc=$minAmt[1]+$unitCost;

          return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 20 && $unit <= 30){
        
          $unitCost=20*$energyRate[1];

          $unitCost1=($unit-20)*$energyRate[2];
          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";

          $calc=$minAmt[2]+$unitCost+$unitCost1;
          return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 30 && $unit <= 50){
          $unitCost=20*$energyRate[1];

          $unitCost1=10*$energyRate[2];

          $unitCost2=($unit-30)*$energyRate[3];


          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
         
          $calc=$minAmt[3]+$unitCost1+$unitCost1+$unitCost2;
          return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 50 && $unit <= 100){
          $unitCost=20*$energyRate[1];

          $unitCost1=10*$energyRate[2];

          $unitCost2=20*$energyRate[3];

          $unitCost3=($unit-50)*$energyRate[4];


          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
         
          $calc=$minAmt[3]+$unitCost1+$unitCost1+$unitCost2+$unitCost3;
          return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 100 && $unit <= 150){
          $unitCost=20*$energyRate[1];

          $unitCost1=10*$energyRate[2];

          $unitCost2=20*$energyRate[3];

          $unitCost3=50*$energyRate[4];

          $unitCost4=($unit-100)*$energyRate[5];


          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
          echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
         
          $calc=$minAmt[3]+$unitCost1+$unitCost1+$unitCost2+$unitCost3+$unitCost4;
          return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 150 && $unit <= 250){
          $unitCost=20*$energyRate[1];

          $unitCost1=10*$energyRate[2];

          $unitCost2=20*$energyRate[3];

          $unitCost3=50*$energyRate[4];
          
          $unitCost4=50*$energyRate[5];
          $unitCost5=($unit-150)*$energyRate[6];


          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
          echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
          echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
         
          $calc=$minAmt[3]+$unitCost1+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5;
          return "Total Amount is Rs. ".$calc;

        }
        else if($unit > 250 && $unit <= 400){
          $unitCost=20*$energyRate[1];

          $unitCost1=10*$energyRate[2];

          $unitCost2=20*$energyRate[3];

          $unitCost3=50*$energyRate[4];
          
          $unitCost4=50*$energyRate[5];

          $unitCost5=100*$energyRate[6];

          $unitCost6=($unit-250)*$energyRate[7];

          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
          echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
          echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
          echo "251-400 Unit Cost Rs. ".$unitCost6."<br><br>";
         
          $calc=$minAmt[3]+$unitCost1+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5+$unitCost6;
          return "Total Amount is Rs. ".$calc;

        }
        
        else{
          $unitCost=20*$energyRate[1];

          $unitCost1=10*$energyRate[2];

          $unitCost2=20*$energyRate[3];

          $unitCost3=50*$energyRate[4];
          
          $unitCost4=50*$energyRate[5];

          $unitCost5=100*$energyRate[6];

          $unitCost6=150*$energyRate[7];
          $unitCost7=($unit-400)*$energyRate[8];

          echo "Calculation! <br><br> Total Unit ".$unit."<br><br>0-20 Unit Cost Rs. ".$unitCost."<br><br>";
          echo "21-30 Unit Cost Rs. ".$unitCost1."<br><br>";
          echo "31-50 Unit Cost Rs. ".$unitCost2."<br><br>";
          echo "51-100 Unit Cost Rs. ".$unitCost3."<br><br>";
          echo "101-150 Unit Cost Rs. ".$unitCost4."<br><br>";
          echo "151-250 Unit Cost Rs. ".$unitCost5."<br><br>";
          echo "251-400 Unit Cost Rs. ".$unitCost6."<br><br>";
          echo "401 Above Unit Cost Rs. ".$unitCost7."<br><br>";
         
          $calc=$minAmt[3]+$unitCost1+$unitCost1+$unitCost2+$unitCost3+$unitCost4+$unitCost5+$unitCost6+$unitCost7;
          return "Total Amount is Rs. ".$calc;
        }

  }
}
