<?php

namespace App\Http\Controllers\Saldo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trtransaksiperiode;
use App\Trpinjaman;

class SaldoHutangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->Kode;
        $pinjaman = Trpinjaman::select('Nomor', 'Pinjaman', 'LastUpdate')->where("KodeAnggota", $id)->where('ApprovalStatus', 'DISETUJUI')->get();
        $periode = Trtransaksiperiode::select('Nomor', 'Nilai', 'LastUpdate')->where('KodeUser', $id)->where('KodeTransaksi', '20')->OrderBy('LastUpdate', 'DESC')->get();
        $arr = [];


        foreach ($periode as $key => $value) {
            $x['Nomor'] = $value->Nomor;
            $x['Nilai'] = strval($value->Nilai);
            $x['LastUpdate'] = $value->LastUpdate;
            $x['Transaksi'] = "Pembayaran";
            array_push($arr, $x);
        }

        foreach ($pinjaman as $key => $value) {
            $x['Nomor'] = $value->Nomor;
            $x['Nilai'] = strval($value->Pinjaman);
            $x['LastUpdate'] = $value->LastUpdate;
            $x['Transaksi'] = "Pinjaman";
            array_push($arr, $x);
        }

        return view("backend.dashboard.saldo.hutang.index", ['hutang' => $arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
