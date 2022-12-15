@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="lecture/create" class="btn btn-primary">TAMBAH DATA</a>
                    <hr/> 
                    

                    @foreach($department->department as $depart)
                        @php
                            $data = json_decode($depart, true);
                        @endphp
                        <li>{{ $data['name'] }}</li>
                    @endforeach
                    @if($students->isEmpty())
                        Tidak ada ada.
                    @else
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>KELAS</th>
                                <th>DOSEN WALI</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $student->npm }}</td>
                                <td>{{ $student->nama }}</td>
                                <td>{{ $student->kelas }}</td>
                                <td>{{ $student->lecture }}</td>
                                <td></td>
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
