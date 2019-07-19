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
            <span>
                There are no projects to show.
            </span>
        @endif
    </div>
</div>
@endsection