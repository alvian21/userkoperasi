<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Traktifasi;
use App\Msanggota;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web')->except(["login", "getLogin"]);
    }

    public function getLogin()
    {
        if (Auth::guard("web")->check()) {
            return redirect()->route('dashboard.index');
        } else {
            return view("auth.login");
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_nfc' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        } else {
            $user = Traktifasi::where('NoEkop', $request->get('kode_nfc'))->where('Status', 'aktif')->first();
            if ($user) {
                //cek password
                $anggota = Msanggota::where("UserPassword", $request->get('password'))->where('Kode',$user->Kode)->first();

                if ($anggota) {
                    $auth = Auth::guard("web")->login($anggota);
                    $user = Auth::guard('web')->user();
                    dd($user);
                    session()->flash('info', 'Selamat Datang  !');
                    return redirect()->route('dashboard.index');
                }
            } else {
                return redirect()->back()->withErrors("wrong kode nfc or password");
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        Session::flush();

        return redirect('/login')
            ->with('alert-info', 'Anda telah keluar, Sampai ketemu lagi!');
    }
}
