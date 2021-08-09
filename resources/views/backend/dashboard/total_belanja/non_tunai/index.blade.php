@extends('backend.master')

@section('title', 'Non Tunai')


@section('content')
<section class="section">
    <div class="section-header">
        <h1>Detail Non Tunai</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card card-dark">
                    <div class="card-header container-fluid d-flex justify-content-between">
                        <h4 class="text-dark"><i class="fas fa-list pr-2"></i> Detail Non Tunai</h4>

                    </div>
                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nilai</th>
                                        <th>LastUpdate</th>
                                        <th>Transaksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($nontunai as $item)
                                    <td>{{$item->Nomor}}</td>
                                    <td>@rupiah($item->Nilai)</td>
                                    <td>{{$item->LastUpdate}}</td>
                                    <td>{{$item->Transaksi}}</td>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            $('#table-1').DataTable()
        })
    </script>
@endpush
