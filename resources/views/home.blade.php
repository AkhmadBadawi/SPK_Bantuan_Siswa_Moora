@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
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

                <div class="col-sm-12 mb-4">
                    <div class="card-group">
                        <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
                            <div class="card-body">
                                <div class="h1 text-muted text-right mb-4">
                                    <i class="fa fa-cogs text-light"></i>
                                </div>

                                <div class="h4 mb-0 text-light">
                                    <span class="count">Data Kriteria</span>
                                </div>
                                <a href="./data_kriteria"><small class="text-uppercase font-weight-bold text-light">Kunjungi</small></a>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                            <div class="card-body bg-flat-color-2">
                                <div class="h1 text-muted text-right mb-4">
                                    <i class="fa fa-sort-amount-asc text-light"></i>
                                </div>
                                <div class="h4 mb-0 text-light">
                                    <span class="count">Data Bobot</span>
                                </div>
                                <a href="./data_bobot"><small class="text-uppercase font-weight-bold text-light">Kunjungi</small></a>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                            <div class="card-body bg-flat-color-3">
                                <div class="h1 text-right mb-4">
                                    <i class="fa fa-users text-light"></i>
                                </div>
                                <div class="h4 mb-0 text-light">
                                    <span class="count">Data Siswa</span>
                                </div>
                                <a href="./data_siswa"><small class="text-light text-uppercase font-weight-bold">Products sold</small></a>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                            <div class="card-body bg-flat-color-5">
                                <div class="h1 text-right text-light mb-4">
                                    <i class="fa fa-pie-chart"></i>
                                </div>
                                <div class="h4 mb-0 text-light">
                                    <span class="count">Data Alternatif</span>
                                </div>
                                <a href="./data_alternatif"><small class="text-uppercase font-weight-bold text-light">Detail</small></a>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                            <div class="card-body bg-flat-color-4">
                                <div class="h1 text-light text-right mb-4">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="h4 mb-0 text-light">Data Normalisasi</div>
                                <a href="./data_normalisasi"><small class="text-light text-uppercase font-weight-bold">Detail</small></a>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                        <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                            <div class="card-body bg-flat-color-1">
                                <div class="h1 text-light text-right mb-4">
                                    <i class="fa fa-legal (alias)"></i>
                                </div>
                                <div class="h4 mb-0 text-light">
                                    <span class="count">Keputusan</span>
                                </div>
                                <a href="./rangking"><small class="text-light text-uppercase font-weight-bold">Detail</small></a>
                                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
