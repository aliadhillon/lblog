@extends('errors.minimal')

{{-- @section('message', __('Custom Exception occured.')) --}}
@section('code', '503')
@section('message')
    {{ $message }}
@endsection