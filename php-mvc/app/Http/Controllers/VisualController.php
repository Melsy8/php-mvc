<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visual;

class VisualController extends Controller
{
    public function index()
    {
        $record = Visual::select("Attribute",
        DB::raw("count(Digimon) as Jumlah_Digimon"))
        ->groupBy('Attribute')
        ->get();

        $data[]=['Attribute', 'Jumlah_Digimon'];
        foreach($record as $r => $value){
            $data[++$r]=[$value->Attribute,(int)$value->Jumlah_Digimon];
        }
        return view('visualisasi')->with('digimons', json_encode($data));
        // $digimons = DB::select('select Digimon, Stage, Type, Attribute from kkvis');
        // return view('visualisasi')->with('digimons', $digimons);
    }
}
