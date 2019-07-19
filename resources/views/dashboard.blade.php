@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>
                        Welcome
                        <span class="has-text-primary is-size-6">
                                {{ Auth::user()->name }}
                        </span>
                        </p>
                        <p>
                        You have 
                        <span class="has-text-info">
                            {{ Auth::user()->posts->count() }} 
                        </span>
                        posts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
