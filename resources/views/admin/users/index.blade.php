@extends('admin.template.main')

@section('title','Lista de usuarios')

@section('content')

    @include('admin.template.partials.message')

    <a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>

    {!! Form::open(['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...']) !!}
        <div class="input-group-btn">
            {!! Form::submit('Buscar',['class' => 'btn btn-info']) !!}
            <!--<button type="button" class="btn btn-info">Buscar</button>-->
        </div>
    </div>
    {!! Form::close() !!}

    <table class="table table-striped">
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
                        <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> Editar</span></a>
                        <a href="{{ route('admin.users.destroy',$user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"> Eliminar</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {!! $users->render() !!}
    </div>

@endsection