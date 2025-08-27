@php($editing = isset($disponibilidad))
<form action="{{ $editing ? route('disponibilidades.update',$disponibilidad) : route('disponibilidades.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Aula</label>
<input class="input" name="aula_id" type="number" required value="{{ old('aula_id',$disponibilidad->aula_id ?? '') }}"></div>
<div class="form-group"><label class="label">Día de semana</label>
<input class="input" name="dia_semana" value="{{ old('dia_semana',$disponibilidad->dia_semana ?? '') }}"></div>
<div class="form-group"><label class="label">Hora inicio</label>
<input class="input" type="time" name="hora_inicio" value="{{ old('hora_inicio',$disponibilidad->hora_inicio ?? '') }}"></div>
<div class="form-group"><label class="label">Hora fin</label>
<input class="input" type="time" name="hora_fin" value="{{ old('hora_fin',$disponibilidad->hora_fin ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('disponibilidades.index') }}" class="btn">Cancelar</a>
</div>
</form>