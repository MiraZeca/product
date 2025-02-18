@extends('master')

@section('title')
    Register
@endsection

@section('main')
    <div class="container">
        <div class="row">

            @if ($errors->any())
                <div class="col s12">
                    <div class="card red lighten-4">
                        <div class="card-content">
                            <span class="card-title">There were some errors with your submission</span>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('users.store') }}" method="POST" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="validate" value="{{ old('name') }}"
                            required>
                        @error('name')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}"
                            required>
                        @error('email')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="validate" required>
                        @error('password')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="validate"
                            required>
                        @error('password_confirmation')
                            <span class="red-text">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn waves-effect waves-light btnsave">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
