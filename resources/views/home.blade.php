@extends('adminlte::page')

@section('content_header')
    <br>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="small-box bg-gradient-primary">
                    <div class="inner">
                        <h3>{{ DB::table('pendaftarans')->count() }}</h3>
                        <p>Jumlah Pendaftaran</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('pendaftaran.index') }}" class="small-box-footer">Lihat <i
                            class="fa fa-aarow-circle-right"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-gradient-secondary">
                    <div class="inner">
                        <h3>{{ DB::table('ruangs')->count() }}</h3>
                        <p>Jumlah Ruangan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <a href="{{ route('ruang.index') }}" class="small-box-footer">Lihat <i
                            class="fa fa-aarow-circle-right"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-gradient-success">
                    <div class="inner">
                        <h3>{{ DB::table('keluhans')->count() }}</h3>
                        <p>Jumlah Keluhan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book-medical"></i>
                    </div>
                    <a href="{{ route('keluhan.index') }}" class="small-box-footer">Lihat <i
                            class="fa fa-aarow-circle-right"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3>{{ DB::table('data_dokters')->count() }}</h3>
                        <p>Jumlah Data Dokter</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-nurse"></i>
                    </div>
                    <a href="{{ route('dokter.index') }}" class="small-box-footer">Lihat <i
                            class="fa fa-aarow-circle-right"></i></a>
                </div>
            </div>
        </div>

    
    </div>
    </div>
    </div>
    </div>
@endsection
