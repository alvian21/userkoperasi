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
                <a href="{{route('total_belanja.kredit.index')}}">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="row text-dark" style="margin-top: 38px">
                            <div class="col-md-6">
                                <h5>Total Belanja Kredit</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-right">@rupiah($kredit)</h5>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-6">
                <a href="{{route('saldo.ekop.index')}}">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="row text-dark" style="margin-top: 38px">
                            <div class="col-md-6">
                                <h5>Saldo Ekop</h5>
                            </div>
                            <div class="col-md-6">
                                @if ($ekop < 0) <h5 class="text-danger text-right">@rupiah($ekop)</h5>
                                    @else
                                    <h5 class="text-right">@rupiah($ekop)</h5>
                                    @endif

                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('total_belanja.nontunai.index')}}">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="row text-dark" style="margin-top: 38px">
                            <div class="col-md-6">
                                <h5>Total Belanja Non Tunai</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-right">@rupiah($nontunai)</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{route('saldo.simpanan.index')}}">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-archive"></i>
                        </div>
                        <div class="row text-dark" style="margin-top: 38px">
                            <div class="col-md-6">
                                <h5>Saldo Simpanan</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-right">@rupiah($simpanan)</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('total_belanja.tunai.index')}}">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="row text-dark" style="margin-top: 38px">
                            <div class="col-md-6">
                                <h5>Total Belanja Tunai</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-right">@rupiah($tunai)</h5>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-6">
                <a href="{{route('saldo.hutang.index')}}">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="row text-dark" style="margin-top: 38px">
                            <div class="col-md-6">
                                <h5>Saldo Hutang</h5>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-right">@rupiah($hutang)</h5>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>
@endsection
