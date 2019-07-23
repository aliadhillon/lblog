@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        @if (session('msg'))
            <div class="notification alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        @if ($posts->count())
            <div class="list-group">
                @foreach ($posts as $post)
                    <a href="/posts/{{$post->id}}" class="list-group-item list-group-item-action">{{ $post->title }}</a>
                @endforeach
            </div
        @else
            <div class="notification has-text-centered">
                You have not any post yet.
            </div>
        @endif
    </div>
</div>
@endsection