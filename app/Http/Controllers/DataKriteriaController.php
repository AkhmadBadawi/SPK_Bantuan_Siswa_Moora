<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataKriteriaController extends Controller
{
    public function getData()
    {
        $data_kriteria = DB::table('data_kriteria')->get();
 
        return view('data_kriteria', ['data_kriteria' => $data_kriteria]);
    }
}
