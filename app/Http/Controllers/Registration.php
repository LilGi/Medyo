<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Registration extends Controller
{
    public function index(Request $request){

        $region['regCode']=DB::table('regions')->get();

        return view('auth.register', $region);
//        $region=Region::all();

//        return view('auth.register', compact('region'));
    }

    public function getProvince(Request $request){
        $regCode=$request->post('regCode');
        $province=DB::table('provinces')->where('regCode', $regCode)->orderBy('provDesc','asc')->get();
//        print_r($province);
        $html='<option value="">Select Province</option>';
        foreach ($province as $list){
               $html.='<option value="'.$list->provCode.'">'.$list->provDesc.'</option>';
        }
        echo $html;
    }
    public function getCity(Request $request){
        $provCode=$request->post('provCode');
        $city=DB::table('cities')->where('provCode', $provCode)->orderBy('citymunDesc','asc')->get();
//        print_r($province);
        $html='<option value="">Select City</option>';
        foreach ($city as $list){
            $html.='<option value="'.$list->citymunCode.'">'.$list->citymunDesc.'</option>';
        }
        echo $html;
    }
    public function getBarangay(Request $request){
        $citymunCode=$request->post('citymunCode');
        $barangay=DB::table('barangays')->where('citymunCode', $citymunCode)->orderBy('brgyDesc','asc')->get();
//        print_r($province);
        $html='<option value="">Select Barangay</option>';
        foreach ($barangay as $list){
            $html.='<option value="'.$list->brgyCode.'">'.$list->brgyDesc.'</option>';
        }
        echo $html;
    }
}
