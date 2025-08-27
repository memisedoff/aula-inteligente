@extends('layouts.app')
@section('title', 'Materias')
@section('content')
@include('partials.flash')


<div class="page-header">
<h1 class="title">Materias</h1>
<a href="{{ route('materias.create') }}" class="btn primary">Nueva materia</a>
</div>


<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Código</th>
<th>Carga horaria</th>
<th class="text-right">Acciones</th>
</tr>
</thead>
<tbody>
@forelse ($materias as $materia)
<tr>
<td>{{ $materia->id }}</td>
<td>{{ $materia->nombre }}</td>
<td>{{ $materia->codigo }}</td>
<td>{{ $materia->carga_horaria }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('materias.edit',$materia) }}">Editar</a>
<form action="{{ route('materias.destroy',$materia) }}" method="POST" class="inline"
onsubmit="return confirm('¿Eliminar esta materia?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr>
<td colspan="5" class="text-center">No hay materias cargadas.</td>
</tr>
@endforelse
</tbody>
</table>
</div>


@if(method_exists($materias,'links'))
<div class="pagination-wrap">{{ $materias->links() }}</div>
@endif
</div>
</div>
@endsection