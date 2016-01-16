<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Correo Electrónico') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('type','Tipo de usuario') !!}
    {!! Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control','placeholder'=>'Seleccione un tipo']) !!}
</div>