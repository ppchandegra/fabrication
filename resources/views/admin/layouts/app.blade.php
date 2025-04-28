@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    @yield('content_header')
@stop

@section('content')
    @yield('content')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @yield('css')
@stop

@section('js')
    @yield('js')
@stop 