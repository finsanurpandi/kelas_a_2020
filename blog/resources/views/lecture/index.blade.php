@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="btn-group">
                        <a href="lecture/create" class="btn btn-primary">TAMBAH DATA</a>
                        <a href="lecture/pdf" class="btn btn-danger" target="_blank">PDF</a>
                        <a href="lecture/export" class="btn btn-success" target="_blank">Export</a>
                    </div>
                    <hr/>
                    <form action="lecture/import" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="file">
                        </div>
                        <input type="submit" class="btn btn-primary" value="IMPORT"/>
                    </form>
                    <hr/>
                    @foreach ($user->unreadNotifications as $notification)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Username <strong>{{ $notification->data['username'] }}</strong> sudah melakukan login.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="markAsRead('{{ $notification->id }}');"></button>
                          </div>
                          {{-- {{ $notification->markAsRead() }} --}}
                    @endforeach

                    {{-- {{ $department}} --}}
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
                                <th>PRODI</th>
                                <th>AKSI</th>
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
                                <td>{{ $lecture->department->name }}</td>
                                <td>
                                    <a href="/lecture/{{ Crypt::encryptString($lecture->nidn) }}/student" class="btn btn-warning btn-sm">STUDENT</a>
                                    <a href="/lecture/{{ $lecture->nidn }}/edit" class="btn btn-success btn-sm">EDIT</a>
                                    {!! Form::open(['url' => 'lecture/'.$lecture->nidn, 'method' => 'DELETE']) !!}
                                        {{ Form::button('HAPUS', ['class' => 'btn btn-danger btn-sm', 'onclick' => "deleteConfirmation('".$lecture->nama."')"]) }}
                                    {!! Form::close() !!}
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
