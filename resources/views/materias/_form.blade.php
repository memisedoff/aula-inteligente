@php($editing = isset($materia))
<form action="{{ $editing ? route('materias.update', $materia) : route('materias.store') }}" method="POST" class="form vstack gap">
@csrf
@if($editing) @method('PUT') @endif


<div class="form-group">
<label class="label">Nombre</label>
<input type="text" name="nombre" class="input" required
value="{{ old('nombre', $materia->nombre ?? '') }}">
</div>


<div class="form-group">
<label class="label">Código</label>
<input type="text" name="codigo" class="input" required
value="{{ old('codigo', $materia->codigo ?? '') }}">
<div class="hint">Debe ser único.</div>
</div>


<div class="form-group">
<label class="label">Carga horaria</label>
<input type="number" name="carga_horaria" class="input" min="0"
value="{{ old('carga_horaria', $materia->carga_horaria ?? 0) }}">
</div>


<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar cambios' : 'Crear materia' }}</button>
<a href="{{ route('materias.index') }}" class="btn">Cancelar</a>
</div>
</form>