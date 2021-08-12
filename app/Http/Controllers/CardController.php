<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Msanggota;
use App\Traktifasi;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->has('id')) {
            $id = strval($request->get('id'));
            $traktifasi = Traktifasi::where('NoEkop', $id)->first();
            if ($traktifasi) {
                $msanggota = Msanggota::where('Kode', $traktifasi->Kode)->first();
                return view("frontend.card.index", ['anggota' => $msanggota, 'noekop' => $id]);
            } else {
                $data['title'] = '404';
                $data['name'] = 'Your card is not registered';
                return response()
                ->view('errors.404',['data'=>$data]);

            }
        } else {
            $data['title'] = '404';
            $data['name'] = 'Your card is not registered';
            return response()
            ->view('errors.404',['data'=>$data]);
        }
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
