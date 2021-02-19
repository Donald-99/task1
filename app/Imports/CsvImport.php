<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;

class CsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // $fol = array();
        // //return new User($row);
        // return new User(
        //     $fol[] = array(
        //         'name' => $row[0],
        //         'email' => $row[1],
        //         'password' => \Hash::make($row[2]),
        //     )
        // );
        if(!isset($row[0]))
        {
            return null;
        }
        return new User([
            'name' => $row[0],
            'email' => $row[1],
            'password' => Hash::make($row[2])
        ]);
    }
}
