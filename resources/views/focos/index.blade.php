@extends('layouts.app')
@section('title','Focos')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Focos</h1>
<a href="{{ route('focos.create') }}" class="btn primary">Nuevo foco</a></div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Aula</th><th>Estado</th><th>Potencia</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($focos as $f)
<tr>
<td>{{ $f->id }}</td><td>{{ $f->aula_id }}</td><td>{{ $f->estado }}</td><td>{{ $f->potencia }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('focos.edit',$f) }}">Editar</a>
<form action="{{ route('focos.destroy',$f) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar foco?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="5" class="text-center">No hay focos.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($focos,'links'))<div class="pagination-wrap">{{ $focos->links() }}</div>@endif
</div></div>
@endsection