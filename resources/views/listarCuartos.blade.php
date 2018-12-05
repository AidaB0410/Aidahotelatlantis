@extends('layouts.app')

@section("content")

<div class="row">
    <div class="col-md-12">
        <h2> Listado de habitaciones</h2>
        <a href="{{ route('cuartos.create') }}" class="btn btn-info">Nueva Habitación</a>
    </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-lg">
        @if(Session::has('info'))
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">
                &times;
            </button>
            {{ Session::get('info') }}
        </div>
        @endif

        <table class="table text-center table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Número de Cuarto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col" colspan=3>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cuartos as $key)
                <tr>
                    <th>{{ $num++ }}</th>
                    <th>{{ $key->numero }}</th>
                    <th>{{ $key->descripcion }}</th>
                    <th>
                        <a href="{{ route('cuartos.show', $key->id ) }}" class="btn btn-primary">Ver</a>
                    </th>
                    <th>
                        <form action="{{ route('cuartos.destroy', $key->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">

                            <button class="btn btn-danger" type="submit">Eliminar</button>

                        </form>

                    </th>
                    <th>
                        <a href="{{ route('cuartos.edit', $key->id ) }}" class="btn btn-warning">

                            Modificar
                        </a>

                    </th>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $cuartos->render() }}

    </div>
</div>

@endsection