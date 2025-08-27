@extends('layouts.app')
@section('title','Muebles')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Muebles</h1>
<a href="{{ route('muebles.create') }}" class="btn primary">Nuevo mueble</a></div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Aula</th><th>Tipo</th><th>Cantidad</th><th>Estado</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($muebles as $m)
<tr>
<td>{{ $m->id }}</td><td>{{ $m->aula_id }}</td><td>{{ $m->tipo }}</td><td>{{ $m->cantidad }}</td><td>{{ $m->estado }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('muebles.edit',$m) }}">Editar</a>
<form action="{{ route('muebles.destroy',$m) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar mueble?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="6" class="text-center">No hay muebles.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($muebles,'links'))<div class="pagination-wrap">{{ $muebles->links() }}</div>@endif
</div></div>
@endsection