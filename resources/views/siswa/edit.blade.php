@extends('template')
@section('main')
    <div id="siswa">
        <h2>Tambah Siswa</h2>
        {!! Form::model($siswa, ['method' => 'PATCH', 'action' => ['SiswaController@update', $siswa -> id]]) !!}
            @include('siswa.form', ['submitButtonText' => 'Update Siswa'])
        {!! Form::close() !!} 
    </div>
@stop

@section('footer')
@include('footer')
@stop
