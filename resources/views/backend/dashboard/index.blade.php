@extends('backend.master')

@section('title', 'Dashboard')

@section('dashboard', 'active')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <h2 class="text-center text-dark">KOPERASI KARYAWAN PT. INDOSPRING Tbk. - Gresik</h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="text-dark">
                                    <tr>
                                        <td>
                                            <h5>ID</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5> {{auth()->user()->Kode}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Nama</h5>
                                        </td>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5> {{auth()->user()->Nama}}</h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="row text-dark" style="margin-top: 38px">
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="row text-dark" style="margin-top: 38px">
                        <div class="col-md-6">
                            <h4>Saldo Ekop</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="row text-dark" style="margin-top: 38px">
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-archive"></i>
                    </div>
                    <div class="row text-dark" style="margin-top: 38px">
                        <div class="col-md-6">
                            <h4>Saldo Ekop</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="row text-dark" style="margin-top: 38px">
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="row text-dark" style="margin-top: 38px">
                        <div class="col-md-6">
                            <h4>Saldo Ekop</h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Total Belanja Kredit</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
