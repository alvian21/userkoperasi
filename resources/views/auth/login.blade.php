@extends('layouts.begin_auth')

@section('title', 'Login')

@section('content')
@if ($errors->any())
<div class="alert alert-warning alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <div class="alert-title">Caution</div>
        @foreach ($errors->all() as $item)
        <li>{{ $item }}</li>
        @endforeach
    </div>
</div>
@endif
<div class="login-brand">
    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
</div>
<div class="card card-primary">
    <div class="card-header">
        <h4>Hello, silahkan masuk dengan akun Anda!</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{route("login")}}">
            @csrf
            <input type="hidden" name="kode_nfc" value="{{$noekop}}">
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input id="password" type="password" class="form-control" required name="password" tabindex="2">
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Masuk
                        </button>
                    </div>
                    <div class="col-md-6">
                        @if (session()->has('status'))
                        @if (session('status') == 'komputer')
                        <a href="{{route('scan.index')}}" class="btn btn-primary btn-lg btn-block">Close</a>
                        @elseif(session()->has('status') == 'hp')
                        <a href="#" class="btn btn-primary btn-lg closebtn btn-block">Close</a>
                        @endif
                        @else
                        <a href="#" class="btn btn-primary btn-lg closebtn btn-block">Close</a>
                        @endif


                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
