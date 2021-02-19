<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;


use App\Models\User;

class CsvFile extends Controller
{
    function index()
    {
        $data = User::latest()->paginate(10);
        return view('csv_file_pagination', compact('data'))
                ->with('i', (request()->input('page',1) -1) * 10);
    }

    public function csv_export()
    {
        return Excel::download(new CsvExport, 'Book1.xlsx');
    }

    public function csv_import(Request $request)
    {
        Excel::import(new CsvImport, $request->file('file')->store('temp'));
        return back();
    }
}
