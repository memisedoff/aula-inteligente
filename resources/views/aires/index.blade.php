@extends('layouts.app')
@section('title','Aires')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Aires Acondicionados</h1>
<a href="{{ route('aires.create') }}" class="btn primary">Nuevo equipo</a></div>
<div class="card"><div class="card-body">
<div class="table-responsive"><table class="table">
<thead><tr><th>ID</th><th>Aula</th><th>Modo</th><th>Temp (°C)</th><th>Estado</th><th class="text-right">Acciones</th></tr></thead>
<tbody>
@forelse($aires as $a)
<tr>
<td>{{ $a->id }}</td><td>{{ $a->aula_id }}</td><td>{{ $a->modo }}</td><td>{{ $a->temperatura }}</td><td>{{ $a->estado }}</td>
<td class="text-right">
<a class="btn sm" href="{{ route('aires.edit',$a) }}">Editar</a>
<form action="{{ route('aires.destroy',$a) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar equipo?');">
@csrf @method('DELETE')
<button class="btn sm danger">Eliminar</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="6" class="text-center">No hay equipos.</td></tr>
@endforelse
</tbody>
</table></div>
@if(method_exists($aires,'links'))<div class="pagination-wrap">{{ $aires->links() }}</div>@endif
</div></div>
@endsection