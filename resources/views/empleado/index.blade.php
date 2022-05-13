
@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<a href="{{ url('empleado/create') }}"> Registrar nuevo empleado</a>

<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>




            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-success">
                Editar
                </a>
                
            <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline"method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm( 'Quieres Borrar?' )" value="Borrar" class="btn btn-danger">
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>
@endsection