@extends('main')

@section('title', 'Form Data Siswa')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Form Data Siswa</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="./data_siswa/form_isi">Form Data Siswa</a></li>
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
                <form action="./add_siswa" method="POST">
                  @csrf
                        <div class="card">
                          <div class="card-header"><strong>Formulir Data Siswa</strong>
                          <div class="card-body">
                            <div class="form-group"><label for="kode_alternaitf" class=" form-control-label">Kode Alternatif</label><input type="text" id="kode_alternatif" placeholder="Masukkan Kode Alternatif  'A1' " name="kode" class="form-control" required></div>
                            <div class="form-group"><label for="nama_siswa" class=" form-control-label">Nama Siswa</label><input type="text" id="nama_siswa" placeholder="Masukkan Nama Siswa" name="nama" class="form-control" required></div>
                            <div class="form-group"><label for="kelas" class=" form-control-label">Kelas</label><input type="number" id="kelas" placeholder="Masukkan Kelas Siswa" name="kelas" class="form-control" required></div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="pekerjaan" class=" form-control-label">Pekerjaan Orangtua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="pekerjaan" id="pekerjaan" class="form-control">
                                    <option value="PNS">PNS</option>
                                    <option value="Karyawan/Wiraswasta">Karyawan/Wiraswasta</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Buruh">Buruh</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="penghasilan" class=" form-control-label">Penghasilan Orangtua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="penghasilan" id="penghasilan" class="form-control">
                                    <option value="< 700.000">< 700.000</option>
                                    <option value="701.000 - 1.000.000">701.000 -1.000.000</option>
                                    <option value="1.001.000 - 1.200.000">1.001.000 - 1.200.000</option>
                                    <option value="1.201.000 - 1.500.000">1.201.000 - 1.500.000</option>
                                    <option value="> 1.501.000">> 1.501.000</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="tanggungan" class=" form-control-label">Tanggungan Orangtua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="tanggungan" id="tanggungan" class="form-control">
                                    <option value="1 anak">1 anak</option>
                                    <option value="2 anak">2 anak</option>
                                    <option value="3 anak">3 anak</option>
                                    <option value="> 3 anak">> 3 anak</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nilai" class=" form-control-label">Nilai Rapot</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="nilai" id="nilai" class="form-control">
                                    <option value="< 70">< 70</option>
                                    <option value="71-80">71-80</option>
                                    <option value="81-90">81-90</option>
                                    <option value="91-100">91-100</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="status" class=" form-control-label">Status Orang Tua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="status" id="status" class="form-control">
                                    <option value="Lengkap">Lengkap</option>
                                    <option value="Piatu">Piatu</option>
                                    <option value="Yatim">Yatim</option>
                                    <option value="Yatim Piatu">Yatim Piatu</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="program" class=" form-control-label">Program Pendukung</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="program" id="program" class="form-control">
                                    <option value="Tidak Ada">Tidak Ada</option>
                                    <option value="Memiliki SKTM">Memiliki SKTM</option>
                                    <option value="Terdaftar PKH">Terdaftar PKH</option>
                                    <option value="Terdaftar KPS">Terdaftar KPS</option>
                                  </select>
                                </div>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                </form>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
