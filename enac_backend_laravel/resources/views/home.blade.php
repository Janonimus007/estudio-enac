@extends('layout')

@section('content')

    <h1>estoy en el home</h1>

    {{auth()->user()->name}}
@endsection
@section('title')
Home
@endsection