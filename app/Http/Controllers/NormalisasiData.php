<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Normalisasi;
use Illuminate\Support\Facades\DB;



class NormalisasiData extends Controller
{
    public function normalisasi()
    {
        $deleted = DB::table('normalisasi')->delete();
        DB::statement('ALTER TABLE normalisasi AUTO_INCREMENT = 0');

        $pembagi = DB::table('data_alternatif')
            ->selectRaw('
                    SQRT(SUM(POW(C1, 2))) as pembagi1, 
                    SQRT(SUM(POW(C2, 2))) as pembagi2, 
                    SQRT(SUM(POW(C3, 2))) as pembagi3, 
                    SQRT(SUM(POW(C4, 2))) as pembagi4,
                    SQRT(SUM(POW(C5, 2))) as pembagi5,
                    SQRT(SUM(POW(C6, 2))) as pembagi6
                    ')
            ->first();

        $pembagi1 = $pembagi->pembagi1;
        $pembagi2 = $pembagi->pembagi2;
        $pembagi3 = $pembagi->pembagi3;
        $pembagi4 = $pembagi->pembagi4;
        $pembagi5 = $pembagi->pembagi5;
        $pembagi6 = $pembagi->pembagi6;


        $data = DB::table('data_alternatif')
            ->select('id_alternatif', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6')
            ->get()
            ->map(function ($item) use ($pembagi1, $pembagi2, $pembagi3, $pembagi4, $pembagi5, $pembagi6) {
                $item->C1_normalized = number_format($item->C1 / $pembagi1, 4);
                $item->C2_normalized = number_format($item->C2 / $pembagi2, 4);
                $item->C3_normalized = number_format($item->C3 / $pembagi3, 4);
                $item->C4_normalized = number_format($item->C4 / $pembagi4, 4);
                $item->C5_normalized = number_format($item->C5 / $pembagi5, 4);
                $item->C6_normalized = number_format($item->C6 / $pembagi6, 4);
                return $item;
            });

            $bobot = DB::table('data_kriteria')->pluck('bobot');
            foreach ($data as $index => $item) {
                Normalisasi::create([
                    'id_alternatif' => $item->id_alternatif,
                    'C1' => $item->C1_normalized * $bobot[0],
                    'C2' => $item->C2_normalized * $bobot[1],
                    'C3' => $item->C3_normalized * $bobot[2],
                    'C4' => $item->C4_normalized * $bobot[3],
                    'C5' => $item->C5_normalized * $bobot[4],
                    'C6' => $item->C6_normalized * $bobot[5],
                ]);
            }

            $normalisasi = DB::table('normalisasi')->get();

            return view('normalisasi', ['normalisasi' => $normalisasi]);
    }

}
