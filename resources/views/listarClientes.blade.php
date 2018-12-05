@extends('layouts.app')

@section("content")

<div class="row">
    <div class="col-md-12">
        <h2> Listado de clientes</h2>
        <a href="{{ route('clientes.create') }}" class="btn btn-info">Registrar cliente</a>
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cédula</th>
                    <th scope="col" colspan=2>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $key)
                <tr>
                    <th>{{ $num++ }}</th>
                    <th>{{ $key->nombre }}</th>
                    <th>{{ $key->apellido }}</th>
                    <th>{{ $key->cedula }}</th>
                    <th>
                        <form action="{{ route('clientes.destroy', $key->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">

                            <button class="btn btn-danger" type="submit">Eliminar</button>

                        </form>

                    </th>
                    <th>
                        <a href="{{ route('clientes.edit', $key->id ) }}" class="btn btn-warning">

                            Modificar
                        </a>

                    </th>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $clientes->render() }}

    </div>
</div>

@endsection