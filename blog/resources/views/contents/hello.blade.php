@extends('master')

@section('title', 'Halaman Hello')

@section('content')
   <h1>Hello</h1>

   @php
    print_r($fruits);
    print_r($cars);
    @endphp
    <br/>
    {!! $message !!}
    <br/>
   
    @if($message)
        {{ $message }}
    @else
        Tidak ada pesan
    @endif

    <br/>
    
    @foreach($fruits as $fruit)
        {{ $fruit}} <br/>
    @endforeach
    <br/>

    <x-alert theme="danger" content="Ini adalah alert Danger" closeable="true"/>
    <x-alert theme="success" content="Ini adalah alert Success"/>
@stop
