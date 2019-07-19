@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        {{-- Form for new post --}}
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            {{-- Post Title Field --}}
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                  <input name="title" class="input" type="text" placeholder="Enter title here" value="{{ old('title') }}">
                </div>
            </div>

            {{-- Post Body Field --}}
            <div class="field">
                <label class="label">Body</label>
                <div class="control">
                    <textarea name="body" class="textarea" placeholder="Enter you post here">{{ old('body') }}</textarea>
                </div>
            </div>

            {{-- Submit or Cancel group --}}

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Create Post</button>
                </div>
                <div class="control">
                    <a href="{{ route('posts.index') }}" class="button is-text">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="container">
        @include('errors')
    </div>
</div>
    
@endsection