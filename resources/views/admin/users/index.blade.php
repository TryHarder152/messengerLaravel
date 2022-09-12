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
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td><a href="{{ route('admin.users.show', $user->id) }}" class="green-text"><i class="material-icons material-symbols-outlined pointer">open_in_new</i></a></td>
                        <td><a href="{{ route('admin.users.edit', $user->id) }}" class="blue-text"><i class="material-icons material-symbols-outlined pointer">edit</i></a></td>
                        <td>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="red-white bg-red btn" type="submit"><i class="material-icons material-symbols-outlined pointer">delete</i></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection
