<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amp;
use App\Models\AmpDetail;

class HomeController extends Controller
{
    public function index(){
   
        $data =Amp::get();
        
        return view('welcome')->with('data', $data);
    }


    public function GetSubCatAgainstMainCatEdit($id){
        echo json_encode(AmpDetail::where('amp_id', $id)->get());
    }
}
