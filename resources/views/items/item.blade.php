@extends('master')

@section('description')

News
@endsection

@section('title')

News
@endsection

@section('content')

{{ $tit }}

{{ $con['name'] }}

{{-- This comment will not be in the rendered HTML --}}

@endsection