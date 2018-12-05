@extends('layouts.app')

@section("content")

<div class="row">
    <div class="col-md-12">
        <h2> Ver habitaciones</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />

<div class="card" style="width: 30rem;">
  <img class="card-img-top" style="width: 30rem; height:30rem" src="{{asset ($cuartos->foto) }}" alt="Card image cap">
  <br><br><br><br>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Número de habitación:{{ $cuartos->numero}}</li>
    <li class="list-group-item">Descripción: {{ $cuartos->descripcion}}</li>
  </ul>
</div>

<a href="{{ route('cuartos.index') }}" class="btn btn-info">Volver</a>

@endsection