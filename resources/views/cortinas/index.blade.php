@extends('layouts.app')
@section('title','Cortinas')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Cortinas</h1>
<a href="{{ route('cortinas.create') }}" class="btn primary">Nueva cortina</a></div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Aula</th><th>Estado</th><th>Posición</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($cortinas as $c)
<tr>
<td>{{ $c->id }}</td><td>{{ $c->aula_id }}</td><td>{{ $c->estado }}</td><td>{{ $c->posicion }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('cortinas.edit',$c) }}">Editar</a>
<form action="{{ route('cortinas.destroy',$c) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar cortina?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="5" class="text-center">No hay cortinas.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($cortinas,'links'))<div class="pagination-wrap">{{ $cortinas->links() }}</div>@endif
</div></div>
@endsection