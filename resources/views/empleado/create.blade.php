@extends('layouts.app')
 <!-- //La plantilla base -->
@section('content')
 <!-- //Crea una funcionalidad con la plantilla base -->
<div class="container">
<form action="{{ url('/empleado')}}" method="post" enctype="multipart/form-data">
@csrf
@include('empleado.form', ['modo'=>'Crear'])
    


</form>
</div>
@endsection