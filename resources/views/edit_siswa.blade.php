@extends('back')

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
                <form action="/{{$id}}" method="POST">
                    @method('put')
                  @csrf
                        <div class="card">
                          <div class="card-header"><strong>Formulir Data Siswa</strong>
                          <div class="card-body">
                            <div class="form-group"><label for="kode_alternaitf" class=" form-control-label">Kode Alternatif</label><input type="text" id="kode_alternatif" placeholder="Masukkan Kode Alternatif 'A1'" name="kode" class="form-control" value="{{$id}}" disabled></div>
                            <div class="form-group"><label for="nama_siswa" class=" form-control-label">Nama Siswa</label><input type="text" id="nama_siswa" placeholder="Masukkan Nama Siswa" name="nama" class="form-control" value="{{$data_edit->nama_siswa}}" required></div>
                            <div class="form-group"><label for="kelas" class=" form-control-label">Kelas</label><input type="number" id="kelas" placeholder="Masukkan Kelas Siswa" name="kelas" class="form-control" value="{{$data_edit->kelas}}" required></div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="pekerjaan" class=" form-control-label">Pekerjaan Orangtua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="pekerjaan" id="pekerjaan" class="form-control">
                                    <option value="PNS" @if ($data_edit->pekerjaan_ortu == "PNS") selected @endif>PNS</option>
                                    <option value="Karyawan/Wiraswasta" @if ($data_edit->pekerjaan_ortu == "Karyawan/Wiraswasta") selected @endif>Karyawan/Wiraswasta</option>
                                    <option value="Petani" @if ($data_edit->pekerjaan_ortu == "Petani") selected @endif>Petani</option>
                                    <option value="Buruh" @if ($data_edit->pekerjaan_ortu == "Buruh") selected @endif>Buruh</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="penghasilan" class=" form-control-label">Penghasilan Orangtua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="penghasilan" id="penghasilan" class="form-control">
                                    <option value="< 700.000" @if ($data_edit->penghasilan_ortu == "< 700.000") selected @endif>< 700.000</option>
                                    <option value="701.000 - 1.000.000" @if ($data_edit->penghasilan_ortu == "701.000 - 1.000.000") selected @endif>>701.000 - 1.000.000</option>
                                    <option value="1.001.000 - 1.200.000" @if ($data_edit->penghasilan_ortu == "1.001.000 - 1.200.000") selected @endif>>1.001.000 - 1.200.000</option>
                                    <option value="1.201.000 - 1.500.000" @if ($data_edit->penghasilan_ortu == "1.201.000 - 1.500.000") selected @endif>>1.201.000 - 1.500.000</option>
                                    <option value="> 1.501.000" @if ($data_edit->penghasilan_ortu == "> 1.501.000") selected @endif>> 1.501.000</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="tanggungan" class=" form-control-label">Tanggungan Orangtua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="tanggungan" id="tanggungan" class="form-control">
                                    <option value="1 anak" @if ($data_edit->tanggungan_ortu == "1 anak") selected @endif>1 anak</option>
                                    <option value="2 anak" @if ($data_edit->tanggungan_ortu == "2 anak") selected @endif>2 anak</option>
                                    <option value="3 anak" @if ($data_edit->tanggungan_ortu == "3 anak") selected @endif>3 anak</option>
                                    <option value="> 3 anak" @if ($data_edit->tanggungan_ortu == "> 3 anak") selected @endif>> 3 anak</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nilai" class=" form-control-label">Nilai Rapot</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="nilai" id="nilai" class="form-control">
                                    <option value="< 70" @if ($data_edit->nilai_rapot == "< 70") selected @endif>< 70</option>
                                    <option value="71-80" @if ($data_edit->nilai_rapot == "71-80") selected @endif>71-80</option>
                                    <option value="81-90" @if ($data_edit->nilai_rapot == "81-90") selected @endif>81-90</option>
                                    <option value="91-100" @if ($data_edit->nilai_rapot == "91-100") selected @endif>91-100</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="status" class=" form-control-label">Status Orang Tua</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="status" id="status" class="form-control">
                                    <option value="Lengkap" @if ($data_edit->status_ortu == "Lengkap") selected @endif>Lengkap</option>
                                    <option value="Piatu" @if ($data_edit->status_ortu == "Piatu") selected @endif>Piatu</option>
                                    <option value="Yatim" @if ($data_edit->status_ortu == "Yatim") selected @endif>Yatim</option>
                                    <option value="Yatim Piatu" @if ($data_edit->status_ortu == "Yatim Piatu") selected @endif>Yatim Piatu</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="program" class=" form-control-label">Program Pendukung</label></div>
                                <div class="col-12 col-md-9">
                                  <select name="program" id="program" class="form-control">
                                    <option value="Tidak Ada" @if ($data_edit->program == "Tidak Ada") selected @endif>Tidak Ada</option>
                                    <option value="Memiliki SKTM" @if ($data_edit->program == "Memiliki SKTM") selected @endif>Memiliki SKTM</option>
                                    <option value="Terdaftar PKH" @if ($data_edit->program == "Terdaftar PKH") selected @endif>Terdaftar PKH</option>
                                    <option value="Terdaftar KPS" @if ($data_edit->program == "Terdaftar KPS") selected @endif>Terdaftar KPS</option>
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
