@extends('errors.minimal')

{{-- @section('message', __('Custom Exception occured.')) --}}
@section('title', 'Custom Exception')
@section('code', '503')
@section('message', $message)