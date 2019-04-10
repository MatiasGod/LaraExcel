<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelModel extends Model{
    public function model(array $row)
    {
        return new match([
           'hora'           => $row[0],
           'match_number'   => $row[1],
           'time'           => $row[2],
           'category'       => $row[3],
           'team_local'     => $row[4],
           'team_Visitor'   => $row[5],
           'site'           => $row[6],
        ]);
    }
}
