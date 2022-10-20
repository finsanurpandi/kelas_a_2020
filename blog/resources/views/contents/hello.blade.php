@extends('master')

@section('title', 'Halaman Test')

@section('content')
   <h1>Hello</h1>
   @php
    print_r($fruits);
   @endphp
    <br/>
   {!! $message !!}
   <br/>
   @foreach ($fruits as $fruit)
       <li>{{ $fruit }}</li>
   @endforeach
   @for($i=0; $i > 5; $i++)

   @endfor

   @if($message)
        {!! $message !!}
    @else
        Tidak ada pesam
    @endif

    <br/><br/>
    <x-alert theme="danger" caption="ini adalah Alert danger" closeable/>
    <x-alert theme="success" caption="ini adalah alert success"/>
@stop