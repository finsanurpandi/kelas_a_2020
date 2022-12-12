@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                   
                    {!! Form::model($lecture, ['url' => 'lecture/'.$lecture->nidn, 'method' => 'PUT']) !!}
                        @include('lecture.form')
                       {{ Form::submit('UPDATE', ['class' => 'btn btn-success']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
