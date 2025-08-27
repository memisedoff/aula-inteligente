{{-- cortinas/_form.blade.php --}}
@php($editing = isset($cortina))
<form action="{{ $editing ? route('cortinas.update',$cortina) : route('cortinas.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Aula</label>
<input class="input" name="aula_id" type="number" required value="{{ old('aula_id',$cortina->aula_id ?? '') }}"></div>
<div class="form-group"><label class="label">Estado</label>
@php($val = old('estado', $cortina->estado ?? 'cerrada'))
<select class="input" name="estado">
<option value="abierta" {{ $val==='abierta'?'selected':'' }}>Abierta</option>
<option value="cerrada" {{ $val==='cerrada'?'selected':'' }}>Cerrada</option>
</select>
</div>
<div class="form-group"><label class="label">Posición (0–100)</label>
<input class="input" name="posicion" type="number" min="0" max="100" value="{{ old('posicion',$cortina->posicion ?? 0) }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('cortinas.index') }}" class="btn">Cancelar</a>
</div>
</form>