@extends('layouts.app')

@section("content")

<div class="row">
    <div class="col-md-12">
        <h2> Registrar cliente nuevo</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />

{!! Form::open(['route' => ['clientes.store'], 'method' => 'POST'] ) !!}


<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cedula', 'Cédula') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>



{!! Form::close() !!}

@endsection