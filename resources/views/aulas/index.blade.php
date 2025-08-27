@extends('layouts.app')
@section('title','Aulas')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Aulas</h1>
<a href="{{ route('aulas.create') }}" class="btn primary">Nueva aula</a></div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Nombre</th><th>Capacidad</th><th>Ubicación</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($aulas as $a)
<tr>
<td>{{ $a->id }}</td><td>{{ $a->nombre }}</td><td>{{ $a->capacidad }}</td><td>{{ $a->ubicacion }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('aulas.edit',$a) }}">Editar</a>
<form action="{{ route('aulas.destroy',$a) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar aula?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="5" class="text-center">No hay aulas.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($aulas,'links'))<div class="pagination-wrap">{{ $aulas->links() }}</div>@endif
</div></div>
@endsection