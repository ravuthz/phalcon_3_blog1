@extends('layouts.blade')

@section('title', 'Blade Title')

@section('sidebar')
    @parent
    <p>{{ $header }}</p>
@endsection

@section('content')
    <p>{{ $message }}</p>
@endsection