@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container box">
        <ul class="list-group list-group-flush is-size-5">
            <li class="list-group-item">Name: <span class="has-text-primary">{{ $name }}</span></li>
            <li class="list-group-item">Email: <span class="has-text-primary">{{ $email }}</span></li>
            <li class="list-group-item">Posts: <a href="{{ route('posts.index') }}"><span class="has-text-primary">{{ $posts }}</span></a></li>
        </ul>
        <br>
        <div class="container">
            <form action="{{ route('user.delete') }}" method="post">
                @csrf
                @method('delete')
                <button class="button has-background-danger" onclick=" return confirm('Are your sure? You are about to permanently delete your profile.') "type="submit">Delete your profile</button>
            </form>
        </div>
    </div>
</div>
@endsection