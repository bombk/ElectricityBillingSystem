<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amp;
use App\Models\AmpDetail;

class HomeController extends Controller
{
    public function index()
    {

        $data = Amp::get();

        return view('welcome')->with('data', $data);
    }


    public function GetTableDetails($id)
    {

        echo json_encode(AmpDetail::where('amp_id', $id)->get());
    }


    public function calculate(Request $req)
    {

        $id = $req->input('id');

        $minAmt = AmpDetail::where('amp_id', $id)->pluck('minamt');

        $energyRate = AmpDetail::where('amp_id', $id)->pluck('energyrate');

        $unit = $req->unit;


        if ($unit <= 10) {
            $req->session()->flash('unit', $unit);
            $unitCost0 = $unit * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);

            $calc = $minAmt[0] + $unitCost0;
            $req->session()->flash('minamt', $minAmt[0]);

            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else if ($unit > 10 && $unit <= 20) {
            $req->session()->flash('unit', $unit);
            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);
            $unitCost = ($unit - 10) * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);


            $calc = $minAmt[1] + $unitCost0 + $unitCost;
            $req->session()->flash('minamt', $minAmt[1]);
            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else if ($unit > 20 && $unit <= 30) {
            $req->session()->flash('unit', $unit);

            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);

            $unitCost = 10 * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);

            $unitCost1 = ($unit - 20) * $energyRate[2];
            $req->session()->flash('unitCost1', $unitCost1);


            $calc = $minAmt[2] + $unitCost0 + $unitCost + $unitCost1;
            $req->session()->flash('minamt', $minAmt[2]);

            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else if ($unit > 30 && $unit <= 50) {
            $req->session()->flash('unit', $unit);

            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);
            $unitCost = 10 * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);
            $unitCost1 = 10 * $energyRate[2];
            $req->session()->flash('unitCost1', $unitCost1);

            $unitCost2 = ($unit - 30) * $energyRate[3];

            $req->session()->flash('unitCost2//', $unitCost2);


            $calc = $minAmt[3] + $unitCost0 + $unitCost + $unitCost1 + $unitCost2;

            $req->session()->flash('minamt', $minAmt[3]);

            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else if ($unit > 50 && $unit <= 100) {
            $req->session()->flash('unit', $unit);

            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);

            $unitCost = 20 * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);

            $unitCost1 = 10 * $energyRate[2];
            $req->session()->flash('unitCost1', $unitCost1);

            $unitCost2 = 20 * $energyRate[3];
            $req->session()->flash('unitCost2', $unitCost2);

            $unitCost3 = ($unit - 50) * $energyRate[4];
            $req->session()->flash('unitCost3', $unitCost3);

            $calc = $minAmt[4] + $unitCost0 + $unitCost1 + $unitCost1 + $unitCost2 + $unitCost3;
            $req->session()->flash('minamt', $minAmt[4]);
            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else if ($unit > 100 && $unit <= 150) {
            $req->session()->flash('unit', $unit);

            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);

            $unitCost = 10 * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);

            $unitCost1 = 10 * $energyRate[2];
            $req->session()->flash('unitCost1', $unitCost1);

            $unitCost2 = 20 * $energyRate[3];
            $req->session()->flash('unitCost2', $unitCost2);

            $unitCost3 = 50 * $energyRate[4];
            $req->session()->flash('unitCost3', $unitCost3);

            $unitCost4 = ($unit - 100) * $energyRate[5];
            $req->session()->flash('unitCost4', $unitCost4);

            $calc = $minAmt[5] + $unitCost1 + $unitCost1 + $unitCost2 + $unitCost3 + $unitCost4;

            $req->session()->flash('minamt', $minAmt[5]);

            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else if ($unit > 150 && $unit <= 250) {
            $req->session()->flash('unit', $unit);

            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);

            $unitCost = 10 * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);

            $unitCost1 = 10 * $energyRate[2];
            $req->session()->flash('unitCost1', $unitCost1);

            $unitCost2 = 20 * $energyRate[3];
            $req->session()->flash('unitCost2', $unitCost2);

            $unitCost3 = 50 * $energyRate[4];
            $req->session()->flash('unitCost3', $unitCost3);

            $unitCost4 = 50 * $energyRate[5];
            $req->session()->flash('unitCost4', $unitCost4);

            $unitCost5 = ($unit - 150) * $energyRate[6];
            $req->session()->flash('unitCost5', $unitCost5);

            $calc = $minAmt[6] + $unitCost0 + $unitCost + $unitCost1 + $unitCost2 + $unitCost3 + $unitCost4 + $unitCost5;

            $req->session()->flash('minamt', $minAmt[6]);

            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else if ($unit > 250 && $unit <= 400) {
            $req->session()->flash('unit', $unit);

            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);

            $unitCost = 10 * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);

            $unitCost1 = 10 * $energyRate[2];
            $req->session()->flash('unitCost1', $unitCost1);

            $unitCost2 = 20 * $energyRate[3];
            $req->session()->flash('unitCost2', $unitCost2);

            $unitCost3 = 50 * $energyRate[4];
            $req->session()->flash('unitCost3', $unitCost3);

            $unitCost4 = 50 * $energyRate[5];
            $req->session()->flash('unitCost4', $unitCost4);

            $unitCost5 = 100 * $energyRate[6];
            $req->session()->flash('unitCost5', $unitCost5);

            $unitCost6 = ($unit - 250) * $energyRate[7];
            $req->session()->flash('unitCost6', $unitCost6);


            $calc = $minAmt[7] + $unitCost0 + $unitCost + $unitCost1 + $unitCost2 + $unitCost3 + $unitCost4 + $unitCost5 + $unitCost6;

            $req->session()->flash('minamt', $minAmt[7]);

            $req->session()->flash('calc', $calc);
            return redirect('result');
        } else {
            $req->session()->flash('unit', $unit);

            $unitCost0 = 10 * $energyRate[0];
            $req->session()->flash('unitCost0', $unitCost0);
            $unitCost = 10 * $energyRate[1];
            $req->session()->flash('unitCost', $unitCost);

            $unitCost1 = 10 * $energyRate[2];
            $req->session()->flash('unitCost1', $unitCost1);

            $unitCost2 = 20 * $energyRate[3];
            $req->session()->flash('unitCost2', $unitCost2);

            $unitCost3 = 50 * $energyRate[4];
            $req->session()->flash('unitCost3', $unitCost3);

            $unitCost4 = 50 * $energyRate[5];
            $req->session()->flash('unitCost4', $unitCost4);

            $unitCost5 = 100 * $energyRate[6];
            $req->session()->flash('unitCost5', $unitCost5);

            $unitCost6 = 150 * $energyRate[7];
            $req->session()->flash('unitCost6', $unitCost6);
            $unitCost7 = ($unit - 400) * $energyRate[8];
            $req->session()->flash('unitCost7', $unitCost7);

            $calc = $minAmt[8] + $unitCost0 + $unitCost + $unitCost1 + $unitCost2 + $unitCost3 + $unitCost4 + $unitCost5 + $unitCost6 + $unitCost7;

            $req->session()->flash('minamt', $minAmt[8]);

            $req->session()->flash('calc', $calc);
            return redirect('result');
        }
    }
}
