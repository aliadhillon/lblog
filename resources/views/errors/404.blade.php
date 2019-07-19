@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))

@section('back')
    <a style="text-decoration:none" href="/">Go Back</a>
@endsection
