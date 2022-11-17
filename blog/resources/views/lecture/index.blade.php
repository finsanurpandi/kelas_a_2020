@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="lecture/create" class="btn btn-primary">TAMBAH DATA</a>
                    <hr/>
                    @if($lectures->isEmpty())
                        Tidak ada ada.
                    @else
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($lectures as $lecture)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $lecture->nidn }}</td>
                                <td>{{ $lecture->nama }}</td>
                                <td>
                                    @if($lecture->status == 1)
                                        <span class="badge text-bg-success">AKTIF</span>
                                    @else
                                        <span class="badge text-bg-danger">TIDAK AKTIF</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
