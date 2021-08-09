<?php

namespace App\Http\Controllers;

use App\Trsaldototalbelanjaekop;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kode = auth()->user()->Kode;
        $simpanan = DB::select('call CEKSALDOSIMPANAN(?)', [
            $kode
        ]);
        $tunai = DB::select('call CEKSALDOTOTALBELANJATUNAI(?)', [
            $kode
        ]);
        $hutang = DB::select('call CEKSALDOHUTANG(?)', [
            $kode
        ]);

        $ekop = DB::select('call CEKSALDOEKOP(?)', [
            $kode
        ]);
        $kredit = DB::select('call CEKSALDOTOTALBELANJAKREDIT(?)', [
            $kode
        ]);

        $nontunai = Trsaldototalbelanjaekop::where('KodeUser',$kode)->orderBy('Tanggal','DESC')->first();

        if($simpanan){
            $simpanan = $simpanan[0]->Saldo;
        }else{
            $simpanan = 0;
        }
        if($tunai){
            $tunai = $tunai[0]->Saldo;
        }else{
            $tunai = 0;
        }
        if($hutang){
            $hutang = $hutang[0]->Saldo;
        }else{
            $hutang = 0;
        }
        if($ekop){
            $ekop = $ekop[0]->Saldo;
        }else{
            $ekop = 0;
        }
        if($kredit){
            $kredit = $kredit[0]->Saldo;
        }else{
            $kredit = 0;
        }
        if($nontunai){
            $nontunai = $nontunai->Saldo;
        }else{
            $nontunai = 0;
        }


        return view("backend.dashboard.index",
         ['simpanan' => $simpanan,
          'tunai' => $tunai,
          'hutang' => $hutang,
          'ekop' => $ekop,
          'kredit' => $kredit,
          'nontunai' => $nontunai,
          'kode' => $kode,
          ]);
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
        //
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
