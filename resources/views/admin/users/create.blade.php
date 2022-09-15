@extends('layouts/'.$template)

@section('content')
    <div class="page-announce valign-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
            <i class="material-icons">menu</i>
        </a>
        <h1 class="page-announce-text valign"><a href="{{ route('admin.users.index') }}">./Users</a>/Create user </h1>
    </div>

    <div class="row">
        <form class="col s12" method="post" action="{{ route('admin.users.store') }}">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input name="login" id="login" type="text" class="validate">
                    <label for="login">login</label>
                    @error('login')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field col s6">
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    @error('email')
                    <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="name" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                    @error('name')
                    <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field col s6">
                    <input name="last_name" id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                    @error('last_name')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="password" id="password" type="password" class="validate">
                    <label for="password">Password</label>
                    @error('name')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field col s6">
                    <input name="password_confirm" id="password_confirm" type="password" class="validate">
                    <label for="password_confirm">Password confirm</label>
                    @error('password_confirm')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="role" class="browser-default">
                        <option value="none" disabled selected>Choose role</option>
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}">{{ $role }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <button type="submit" class="waves-effect waves-light btn">Create</button>
            </div>
        </form>
    </div>
@endsection
