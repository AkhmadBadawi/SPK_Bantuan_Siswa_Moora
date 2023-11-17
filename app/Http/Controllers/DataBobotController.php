<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataBobotController extends Controller
{
    public function getData()
    {
        $data_bobot = DB::table('data_bobot')->get();
 
        return view('data_bobot', ['data_bobot' => $data_bobot]);
    }
}
