@extends('main')

@section('title', 'Data Siswa')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Siswa</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="./home">Dashboard</a></li>
                        <li class="active">MOORA</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Siswa</strong>
                        </div>
                        <div class="card-body">
                            <div class="button-add" style="margin-bottom: 20px; width: 20px;">
                                <a href="./form_siswa" class="btn btn-primary">
                                    <i class="menu-icon fa fa-plus-square"></i> Tambah Data Siswa
                                </a>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Pekerjaan Orangtua</th>
                                        <th>Penghasilan Orangtua</th>
                                        <th>Tanggungan Orangtua</th>
                                        <th>Nilai Rapot</th>
                                        <th>Status Orangtua</th>
                                        <th>Program</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_siswa as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->id_alternatif }}</td>
                                            <td>{{ $data->nama_siswa }}</td>
                                            <td>{{ $data->kelas }}</td>
                                            <td>{{ $data->pekerjaan_ortu }}</td>
                                            <td>{{ $data->penghasilan_ortu }}</td>
                                            <td>{{ $data->tanggungan_ortu }}</td>
                                            <td>{{ $data->nilai_rapot }}</td>
                                            <td>{{ $data->status_ortu }}</td>
                                            <td>{{ $data->program }}</td>
                                            <td>
                                                <a href="{{$data->id_alternatif}}/edit_siswa" class="btn btn-secondary m-2" style="border-radius: 10px;" title="Edit">
                                                    <i class="menu-icon fa fa-pencil"></i>
                                                </a>
                                                <a href="{{$data->id_alternatif}}/delete_siswa" class="btn btn-danger m-2" style="border-radius: 10px;" title="Delete">
                                                    <i class="menu-icon fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
