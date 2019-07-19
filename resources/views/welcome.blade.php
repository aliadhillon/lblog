@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        @if (session('msg'))
            <div class="notification alert alert-danger">
                {{ session('msg') }}
            </div>
        @endif
        <div class="title m-b-md">
            Laravel  
        </div>

        <div class="links">
            <a href="/posts">Posts</a>
        </div>
</div>
@endsection