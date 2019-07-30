@extends('layouts.app')

@section('content')
<div class="section">

    <div class="container">
        @include('errors')
        <form action="{{ route('test.store') }}" method="POST">
            @csrf
            <div class="field">
                <label class="label">Data</label>
                <div class="control">
                  <input name="data" class="input @error('data') is-danger @enderror" type="text" placeholder="Enter data here" value="{{ old('data') }}">
                  @error('data')
                    <span class="has-text-danger">{{ $message }}</span>
                  @enderror
                </div>
            </div>
            <div class="field">
                <label class="label">Data</label>
                <div class="control">
                  
                  <input name="data" class="input @error('data') is-danger @enderror" type="text" placeholder="Enter data here" value="{{ old('data') }}">
                  @error('data')
                    <span class="has-text-danger">{{ $message }}</span>
                  @enderror
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Send</button>
                </div>
                <div class="control">
                    <a href="{{ route('test.index') }}" class="button is-text">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</div>    
@endsection