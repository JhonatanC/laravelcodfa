@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')
    <table class="table table-striped">

        <!--<div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <p>El usuario fue registrado con éxito! </p>
        </div>-->

        <a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>

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
                        <a href="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> Editar</span></a>
                        <a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"> Eliminar</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $users->render() !!}

@endsection