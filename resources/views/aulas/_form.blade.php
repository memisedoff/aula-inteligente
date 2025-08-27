{{-- aulas/_form.blade.php --}}
@php($editing = isset($aula))
<form action="{{ $editing ? route('aulas.update',$aula) : route('aulas.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Nombre</label>
<input class="input" name="nombre" required value="{{ old('nombre',$aula->nombre ?? '') }}"></div>
<div class="form-group"><label class="label">Capacidad</label>
<input class="input" name="capacidad" type="number" min="0" value="{{ old('capacidad',$aula->capacidad ?? 0) }}"></div>
<div class="form-group"><label class="label">Ubicación</label>
<input class="input" name="ubicacion" value="{{ old('ubicacion',$aula->ubicacion ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('aulas.index') }}" class="btn">Cancelar</a>
</div>
</form>