@extends('layouts.app')

@section("content")

<div class="row">
    <div class="col-md-12">
        <h2> Registrar nueva habitación</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />

{!! Form::open(['route' => ['cuartos.store'], 'method' => 'POST', 'files' => true ] ) !!}

<div class="form-group">
    {!! Form::label('file', 'Imagen de la habitación') !!}
    {!! Form::file('file') !!}
</div>

<div class="form-group">
    {!! Form::label('numero', 'Numero de habitación') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripción de la habitación') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
</div>



{!! Form::close() !!}

@endsection