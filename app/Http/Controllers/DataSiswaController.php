<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_alternatif;
use App\Models\Data_siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSiswaController extends Controller
{
    public function getData()
    {
        $data_siswa = DB::table('data_siswa')->get();

        return view('data_siswa', ['data_siswa' => $data_siswa]);
    }

    public function form_isi()
    {
        return view('form_siswa');
    }

    public function edit($id_alternatif) {
        $data_edit = Data_siswa::find($id_alternatif);
        $id = $id_alternatif;
        return view('edit_siswa', ['data_edit'=> $data_edit,'id'=> $id]);
    }

    public function update(Request $request, $id){
        $data_update = Data_siswa::find($id);

        $nama = $request->input('nama');
        $kelas = $request->input('kelas');
        $pekerjaan = $request->input('pekerjaan');
        $penghasilan = $request->input('penghasilan');
        $tanggungan = $request->input('tanggungan');
        $nilai = $request->input('nilai');
        $status = $request->input('status');
        $program = $request->input('program');

        $data_update->update(
            [
                'nama_siswa' => $nama,
                'kelas' => $kelas,
                'pekerjaan_ortu' => $pekerjaan,
                'penghasilan_ortu' => $penghasilan,
                'tanggungan_ortu' => $tanggungan,
                'nilai_rapot' => $nilai,
                'status_ortu' => $status,
                'program' => $program,
            ]
        );

        return redirect('data_siswa');

    }

    public function delete($id_alternatif){
        $data_delete1 = Data_alternatif::find($id_alternatif);
        $data_delete2 = Data_siswa::find($id_alternatif);
        $data_delete1->delete();
        $data_delete2->delete();
        return redirect('data_siswa');
    }

    public function insert(Request $request)
    {
        $kode = $request->input('kode');
        $nama = $request->input('nama');
        $kelas = $request->input('kelas');
        $pekerjaan = $request->input('pekerjaan');
        $penghasilan = $request->input('penghasilan');
        $tanggungan = $request->input('tanggungan');
        $nilai = $request->input('nilai');
        $status = $request->input('status');
        $program = $request->input('program');

        if ($pekerjaan == 'PNS') {
            $C3 = 1;
        } else if ($pekerjaan == 'Karyawan/Wiraswasta') {
            $C3 = 2;
        } else if ($pekerjaan == 'Petani') {
            $C3 = 3;
        } else if ($pekerjaan == 'Buruh') {
            $C3 = 4;
        }

        if ($penghasilan == '< 700.000') {
            $C1 = 1;
        } else if ($penghasilan == '701.000 - 1.000.000') {
            $C1 = 2;
        } else if ($penghasilan == '1.001.000 - 1.200.000') {
            $C1 = 3;
        } else if ($penghasilan == '1.201.000 - 1.500.000') {
            $C1 = 4;
        } else if ($penghasilan == '> 1.501.000') {
            $C1 = 5;
        }

        if ($tanggungan == '1 anak') {
            $C2 = 1;
        } else if ($tanggungan == '2 anak') {
            $C2 = 2;
        } else if ($tanggungan == '3 anak') {
            $C2 = 3;
        } else if ($tanggungan == '> 3 anak') {
            $C2 = 4;
        }

        if ($nilai == '< 70') {
            $C4 = 1;
        } else if ($nilai == '71-80') {
            $C4 = 2;
        } else if ($nilai == '81-90') {
            $C4 = 3;
        } else if ($nilai == '91-100') {
            $C4 = 4;
        }

        if ($status == 'Lengkap') {
            $C5 = 1;
        } else if ($status == 'Piatu') {
            $C5 = 2;
        } else if ($status == 'Yatim') {
            $C5 = 3;
        } else if ($status == 'Yatim Piatu') {
            $C5 = 4;
        }

        if ($program == 'Tidak Ada') {
            $C6 = 4;
        } else if ($program == 'Memiliki SKTM') {
            $C6 = 3;
        } else if ($program == 'Terdaftar PKH') {
            $C6 = 2;
        } else if ($program == 'Terdaftar KPS') {
            $C6 = 1;
        }

        Data_siswa::updateOrInsert(
            ['id_alternatif' => $kode],
            [
                'nama_siswa' => $nama,
                'kelas' => $kelas,
                'pekerjaan_ortu' => $pekerjaan,
                'penghasilan_ortu' => $penghasilan,
                'tanggungan_ortu' => $tanggungan,
                'nilai_rapot' => $nilai,
                'status_ortu' => $status,
                'program' => $program,
            ]
        );

        Data_alternatif::updateOrInsert(
            ['id_alternatif' => $kode],
            [
                'C1' => $C1,
                'C2' => $C2,
                'C3' => $C3,
                'C4' => $C4,
                'C5' => $C5,
                'C6' => $C6,
            ]
        );

        return redirect('data_siswa');
    }

    
}
