{{-- Extends Master Layout --}}
@extends('layout.master.layout')

{{-- Page Title --}}
@section('page-title', 'Homepagina')

{{-- App --}}
@section('app')

    <h1>@yield('page-title')</h1>

@endsection
