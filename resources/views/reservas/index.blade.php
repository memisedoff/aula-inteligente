@extends('layouts.app')
@section('title','Reservas')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Reservas</h1>
<a href="{{ route('reservas.create') }}" class="btn primary">Nueva reserva</a></div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Aula</th><th>Docente</th><th>Fecha</th><th>Inicio</th><th>Fin</th><th>Motivo</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($reservas as $res)
<tr>
<td>{{ $res->id }}</td><td>{{ $res->aula_id }}</td><td>{{ $res->docente_id }}</td>
<td>{{ $res->fecha }}</td><td>{{ $res->hora_inicio }}</td><td>{{ $res->hora_fin }}</td><td>{{ $res->motivo }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('reservas.edit',$res) }}">Editar</a>
<form action="{{ route('reservas.destroy',$res) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar reserva?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="8" class="text-center">No hay reservas.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($reservas,'links'))<div class="pagination-wrap">{{ $reservas->links() }}</div>@endif
</div></div>
@endsection