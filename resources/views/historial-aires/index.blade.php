@extends('layouts.app')
@section('title','Historial de Aires')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Historial de Aires</h1>
<a href="{{ route('historial-aires.create') }}" class="btn primary">Nuevo registro</a></div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Aire</th><th>Acción</th><th>Valor</th><th>Fecha</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($historial_aires as $h)
<tr>
<td>{{ $h->id }}</td><td>{{ $h->aire_id }}</td><td>{{ $h->accion }}</td><td>{{ $h->valor }}</td><td>{{ $h->fecha }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('historial-aires.edit',$h) }}">Editar</a>
<form action="{{ route('historial-aires.destroy',$h) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar registro?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="6" class="text-center">Sin registros.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($historial_aires,'links'))<div class="pagination-wrap">{{ $historial_aires->links() }}</div>@endif
</div></div>
@endsection