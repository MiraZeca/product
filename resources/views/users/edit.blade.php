@section('title', 'Edit User')

@extends('master')

@section('main')
    <div class="container">
        <h1>Edit User</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-field col s12">
                <label class="role">Role</label>
                <select name="role" id="role" required>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}" {{ $user->role && $user->role->name === $role->name ? 'selected' : '' }}>{{ ucfirst($role->name) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-success mt-5 useredit">Save</button>
            </div>

        </form>
    </div>
@endsection

<script> document.addEventListener('DOMContentLoaded', function() { var elems = document.querySelectorAll('select'); var instances = M.FormSelect.init(elems); }); </script>
