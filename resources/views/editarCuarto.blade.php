@extends('layouts.app')

@section("content")
<div class="row">
    <div class="col-md-12">
        <h2> Editar habitaciones</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />

<div class="card" style="width: 30rem;">
  <img class="card-img-top" style="width: 30rem; height:30rem" src="{{asset ($cuartos->foto) }}">
</div>

{!! Form::model($cuartos, ['route' => ['cuartos.update', $cuartos->id], 'method' => 'PUT', 'files' => true ] ) !!}

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
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>



{!! Form::close() !!}

@endsection


