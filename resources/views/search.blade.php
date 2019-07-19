@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <form action="/search" method="get">
                <div class="field">
                    <div class="control">
                    <input name="q" class="input" type="text" placeholder="Search here" value="{{ $q }}">
                    </div>
                </div>
                <div class="field">
                        <button class="button is-info" type="submit">Srearch</button>
                </div>
            </form>
        </div>
        <hr>
        <div class="container">
                <p>{{ $q }} </p>
        </div>
    </div>
@endsection