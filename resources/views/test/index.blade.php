@extends('layouts.app')

@section('content')
<div class="section">
    <h3 class="is-3 has-text-centered"> Hello {{ $data ?? 'There is no data available' }} </h3>
</div>    
@endsection