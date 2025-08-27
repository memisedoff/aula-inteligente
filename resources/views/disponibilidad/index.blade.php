@extends('layouts.app')
@section('title','Disponibilidades')
@section('content')
@include('partials.flash')
<div class="page-header">
<h1 class="title">Disponibilidades</h1>
<a href="{{ route('disponibilidades.create') }}" class="btn primary">Nueva disponibilidad</a>
</div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Aula</th><th>Día</th><th>Inicio</th><th>Fin</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($disponibilidades as $disp)
<tr>
<td>{{ $disp->id }}</td>
<td>{{ $disp->aula_id }}</td>
<td>{{ $disp->dia_semana }}</td>
<td>{{ $disp->hora_inicio }}</td>
<td>{{ $disp->hora_fin }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('disponibilidades.edit',$disp) }}">Editar</a>
<form action="{{ route('disponibilidades.destroy',$disp) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar disponibilidad?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="6" class="text-center">No hay disponibilidades.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($disponibilidades,'links'))<div class="pagination-wrap">{{ $disponibilidades->links() }}</div>@endif
</div></div>
@endsection