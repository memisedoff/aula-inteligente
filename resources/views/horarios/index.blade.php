@extends('layouts.app')
@section('title','Horarios')
@section('content')
@include('partials.flash')
<div class="page-header">
<h1 class="title">Horarios</h1>
<a href="{{ route('horarios.create') }}" class="btn primary">Nuevo horario</a>
</div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr>
<th>ID</th><th>Materia</th><th>Docente</th><th>Aula</th><th>Día</th><th>Inicio</th><th>Fin</th><th class="text-right">Acciones</th>
</tr></thead>
<tbody>
@forelse($horarios as $hor)
<tr>
<td>{{ $hor->id }}</td>
<td>{{ $hor->materia_id }}</td>
<td>{{ $hor->docente_id }}</td>
<td>{{ $hor->aula_id }}</td>
<td>{{ $hor->dia_semana }}</td>
<td>{{ $hor->hora_inicio }}</td>
<td>{{ $hor->hora_fin }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('horarios.edit',$hor) }}">Editar</a>
<form action="{{ route('horarios.destroy',$hor) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar horario?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="8" class="text-center">No hay horarios.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($horarios,'links'))<div class="pagination-wrap">{{ $horarios->links() }}</div>@endif
</div></div>
@endsection