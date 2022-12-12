@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recycle Bin</div>

                <div class="card-body">
                    {!! Form::open(['url' => 'lecture/restore/all', 'method' => 'POST']) !!}
                        {{ Form::submit('Restore All', ['class' => 'btn btn-primary btn-sm']) }}
                    {!! Form::close() !!}

                    {!! Form::open(['url' => 'lecture/empty', 'method' => 'POST']) !!}
                        {{ Form::submit('Empty', ['class' => 'btn btn-danger btn-sm']) }}
                    {!! Form::close() !!}

                    <hr/>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIDN</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($trash as $tr)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $tr->nidn }}</td>
                                <td>{{ $tr->nama }}</td>
                                <td>
                                    @if($tr->status == 1)
                                        <span class="badge text-bg-success">AKTIF</span>
                                    @else
                                        <span class="badge text-bg-danger">TIDAK AKTIF</span>
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open(['url' => 'lecture/'.$tr->nidn.'/restore', 'method' => 'POST']) !!}
                                        {{ Form::submit('Restore', ['class' => 'btn btn-success btn-sm']) }}
                                    {!! Form::close() !!}

                                    {!! Form::open(['url' => 'lecture/'.$tr->nidn.'/delete', 'method' => 'POST']) !!}
                                        {{ Form::submit('Destroy', ['class' => 'btn btn-danger btn-sm']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
