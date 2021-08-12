@extends('layouts.begin_auth')

@section('title', 'Scan Card')

@section('content')

<div class="login-brand">
    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="100"
        class="shadow-light rounded-circle">
</div>
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
<div class="card card-primary">
    <div class="card-header">
        <h4>Hello, please scan your card!</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('scan.store')}}">
            @csrf
            <input type="hidden" name="kode_nfc" >
            <div class="form-group">
                <label for="text">Card</label>
                <input id="text" type="text" class="form-control" required name="card" tabindex="2">
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Scan Your Card
                        </button>
                    </div>

                </div>

            </div>
        </form>
    </div>
</div>
@endsection
