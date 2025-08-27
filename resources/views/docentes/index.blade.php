@extends('layouts.app')
@section('title','Docentes')
@section('content')
@include('partials.flash')
<div class="page-header">
<h1 class="title">Docentes</h1>
<a href="{{ route('docentes.create') }}" class="btn primary">Nuevo docente</a>
</div>
<div class="card"><div class="card-body">
<div class="table-responsive">
<table class="table">
<thead><tr>
<th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Teléfono</th>
<th class="text-right">Acciones</th>
</tr></thead>
<tbody>
@forelse($docentes as $docente)
<tr>
<td>{{ $docente->id }}</td>
<td>{{ $docente->nombre }}</td>
<td>{{ $docente->apellido }}</td>
<td>{{ $docente->email }}</td>
<td>{{ $docente->telefono }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('docentes.edit',$docente) }}">Editar</a>
<form action="{{ route('docentes.destroy',$docente) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar docente?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="6" class="text-center">No hay docentes.</td></tr>
@endforelse
</tbody>
</table>
</div>
@if(method_exists($docentes,'links'))<div class="pagination-wrap">{{ $docentes->links() }}</div>@endif
</div></div>
@endsection