{{-- muebles/_form.blade.php --}}
@php($editing = isset($mueble))
<form action="{{ $editing ? route('muebles.update',$mueble) : route('muebles.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Aula</label>
<input class="input" name="aula_id" type="number" required value="{{ old('aula_id',$mueble->aula_id ?? '') }}"></div>
<div class="form-group"><label class="label">Tipo</label>
<input class="input" name="tipo" value="{{ old('tipo',$mueble->tipo ?? '') }}"></div>
<div class="form-group"><label class="label">Cantidad</label>
<input class="input" name="cantidad" type="number" min="0" value="{{ old('cantidad',$mueble->cantidad ?? 0) }}"></div>
<div class="form-group"><label class="label">Estado</label>
<input class="input" name="estado" value="{{ old('estado',$mueble->estado ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('muebles.index') }}" class="btn">Cancelar</a>
</div>
</form>