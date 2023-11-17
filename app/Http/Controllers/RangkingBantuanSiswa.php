<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rangking;
use Illuminate\Support\Facades\DB;


class RangkingBantuanSiswa extends Controller
{
    public function rangking()
    {
        $deleted = DB::table('rangking')->delete();
        DB::statement('ALTER TABLE rangking AUTO_INCREMENT = 0');

        $data = DB::table('normalisasi')
            ->select('id_alternatif', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6')
            ->get()
            ->map(function ($item) {
                $item->min = $item->C1 + $item->C6;
                $item->max = $item->C2 + $item->C3 + $item->C4 + $item->C5;
                return $item;
            });

        foreach ($data as $item) {
            Rangking::create([
                'id_alternatif' => $item->id_alternatif,
                'y' => $item->max - $item->min,
            ]);
        }

        $rank = DB::table('rangking')
            ->orderBy('y', 'desc')
            ->get();

        $rangking = 1;

        foreach ($rank as $item) {
            DB::table('rangking')
                ->where('id', $item->id)
                ->update(['rangking' => $rangking]);
        
            $rangking++;
        }

        $hasil = DB::table('rangking')->orderBy('rangking')->get();


        return view('rangking', ['rangking' => $hasil]);
    }
}
