@extends('layouts.app')

@section('content')
<div class="section">
    <h3 class="is-3 has-text-centered"> Follwing pages are available at: {{ $time }} PST on: {{ $date }} </h3>
    <div class="container has-text-centered">
        <ul>
        @foreach ($pages as $page)
            <li>{{ $page }}</li>
        @endforeach
        </ul>
    </div>    
    
</div>    
@endsection