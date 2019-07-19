@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container box is-unselectable">
        <h2 class="title is-2">{{ $post->title }}</h2>
        <p class="subtitle is-size-6">
            Author: <a class="no-dec" href="{{ route('profile') }}"><span class="has-text-info">{{ $post->user->name }}</span></a>
        </p>
        <p>
            {{ $post->body }}
        </p>
        <form action="{{ route('posts.destroy', $post->id ) }}" method="post">
            @csrf
            @method('delete')
            <button class="button has-background-danger" type="submit" onclick="return confirm('Are you sure? You are about to permanently delete this post.')">Delete</button>
        </form>
    </div>

</div>
@endsection