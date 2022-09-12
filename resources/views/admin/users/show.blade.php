@extends('layouts/'.$template)

@section('content')
    <div class="page-announce valign-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
            <i class="material-icons">menu</i>
        </a>
        <h1 class="page-announce-text valign"><a href="{{ route('admin.users.index') }}">./Users</a>/{{ $user->name }} </h1>
    </div>

    <table class="striped hover centered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
            </tr>
        </tbody>
    </table>
@endsection
