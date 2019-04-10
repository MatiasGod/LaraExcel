<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\ExcelModel;

use DB;
use Carbon\Carbon;

//use ExcelModel;
 

class ExcelController extends Controller
{
    public function importxcel(){
        $arrMatchs=[];
        $array = Excel::toArray(new ExcelModel, 'excel/prubea.xlsx');
        foreach ($array[0] as $rows) {
            $arrMatch=[
                //devuelve un objeto numerico, la clase PhpSpread lo castea a fecha y carbon lo castea a carbon.
                "date" => Carbon::parse(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rows[0])),
                "match_number" => (int)$rows[1],
                "category" => $rows[2],
                "team_local" => $rows[3],
                "team_visitor" => $rows[4],
                "location" => $rows[5],
                "principal" => $rows[6],
                "auxiliar" => $rows[7],
                "writter" => $rows[8],
                "timekeeper" => $rows[9],
                "24_timekeeper" => $rows[10],                
            ];
            array_push($arrMatchs, $arrMatch);
        }
        return view('home',['partidos' => $arrMatchs]);
    } 
}
