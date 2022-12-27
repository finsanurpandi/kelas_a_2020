<div class="mb-3">
    {{ Form::label('nidn', 'NIDN') }}
    {{ Form::text('nidn', null, ['class' => 'form-control', 'required' => 'true']) }}
</div>
<div class="mb-3">
   {{ Form::label('nama', 'Nama Dosen') }}
   {{ Form::text('nama', null, ['class' => 'form-control']) }}
</div>
<div class="mb-3">
    {{ Form::label('department_id', 'Program Studi') }}
    {{ Form::select('department_id', $departments, null, ['class' => 'form-control', 'placeholder' => 'Pilih Program Studi ...']) }}
    </div>

@if(Request::segment(3) == 'edit')
    <div class="mb-3">
    {{ Form::label('status', 'Status') }}
    {{ Form::select('status', [1 => 'Aktif', 0 => 'Tidak Aktif'], null, ['class' => 'form-control']) }}
    </div>
@endif