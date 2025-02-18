
@section('title')
    Login
@endsection

@extends('master')

@section('main')
    <div class="container">
        <div class="row">
            <form action="{{ route('users.login.submit') }}" method="POST" class="col s12">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="validate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="validate" required>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn waves-effect waves-light">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
