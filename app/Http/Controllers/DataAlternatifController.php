<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataAlternatifController extends Controller
{
    public function getData()
    {
        $data_alternatif = DB::table('data_alternatif')->get();

        return view('data_alternatif', ['data_alternatif' => $data_alternatif]);
    }

}
