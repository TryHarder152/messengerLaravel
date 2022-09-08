@extends('layouts/'.$template)

@section('content')
    <div class="page-announce valign-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
            <i class="material-icons">menu</i>
        </a>
        <h1 class="page-announce-text valign">// Users </h1>
    </div>
    <table class="striped hover centered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>TFA Active?</th>
            </tr>
        </thead>
        <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td><i class="text-green material-icons">check</i></td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection
