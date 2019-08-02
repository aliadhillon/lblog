@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Data</label>
                <div class="control">
                  <input name="data" class="input @error('data') is-danger @enderror" type="text" placeholder="Enter data here" value="{{ old('data') }}">  
                </div>
                @error('data')
                  <span class="has-text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label class="label">Data2</label>
                <div class="control">
                  <input name="data2" class="input @error('data2') is-danger @enderror" type="text" placeholder="Enter data2 here" value="{{ old('data2') }}">
                </div>
                @error('data2')
                  <span class="has-text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                  <input name="email" class="input @error('email') is-danger @enderror" type="email" placeholder="Enter Email here" value="{{ old('email') }}">
                </div>
                @error('email')
                  <span class="has-text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
              <label for="image" class="label">Image</label>
              <div class="control">
                <input type="file" name="image" accept="image/png, image/jpeg">
              </div>
              @error('image')
                <span class="has-text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                  <input name="password" class="input @error('password') is-danger @enderror" type="password" placeholder="Enter password here" value="{{ old('password') }}">
                </div>
                @error('password')
                  <span class="has-text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label class="label">Password Confirm</label>
                <div class="control">
                  <input name="password_confirmation" class="input @error('password_confirmation') is-danger @enderror" type="password" placeholder="Enter password here" value="{{ old('password_confirmation') }}">
                </div>
                @error('password_confirmation')
                  <span class="has-text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="field">
                <label class="label">Date</label>
                <div class="control">
                  <input class="input @error('date') is-danger @enderror" type="date" name="date" value="{{ old('date', date('Y-m-d')) }}">
                </div>
                @error('date')
                  <span class="has-text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="field">
                <label class="checkbox">
                  <input type="checkbox" class="@error('data') is-danger @enderror" name="checkbox" value="true" {{ old('checkbox') ? 'checked' : '' }}>
                  I agree to the <a href="#">terms and conditions</a>
                </label>
                @error('checkbox')
                  <span class="has-text-danger">{{ $message }}</span>
                @enderror
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
    {{-- <br>
    <div class="container">
      @include('errors')
    </div> --}}

</div>    
@endsection