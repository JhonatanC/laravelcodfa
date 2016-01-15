@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')
    <table class="table table-striped">

        <a class="btn btn-info" href="{{ route('admin.users.create') }}">Registrar nuevo usuario</a>

        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>type user</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->type == "admin")
                            <span class="label label-success">{{ $user->type }}</span>
                        @else
                            <span class="label label-primary">{{ $user->type }}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="">Editar</a>
                        <a class="btn btn-danger" href="">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $users->render() !!}

@endsection