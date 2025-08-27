@php($editing = isset($horario))
<form action="{{ $editing ? route('horarios.update',$horario) : route('horarios.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Materia</label>
<input class="input" name="materia_id" type="number" required value="{{ old('materia_id',$horario->materia_id ?? '') }}"></div>
<div class="form-group"><label class="label">Docente</label>
<input class="input" name="docente_id" type="number" required value="{{ old('docente_id',$horario->docente_id ?? '') }}"></div>
<div class="form-group"><label class="label">Aula</label>
<input class="input" name="aula_id" type="number" required value="{{ old('aula_id',$horario->aula_id ?? '') }}"></div>
<div class="form-group"><label class="label">Día</label>
<input class="input" name="dia_semana" value="{{ old('dia_semana',$horario->dia_semana ?? '') }}"></div>
<div class="form-group"><label class="label">Hora inicio</label>
<input class="input" type="time" name="hora_inicio" value="{{ old('hora_inicio',$horario->hora_inicio ?? '') }}"></div>
<div class="form-group"><label class="label">Hora fin</label>
<input class="input" type="time" name="hora_fin" value="{{ old('hora_fin',$horario->hora_fin ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('horarios.index') }}" class="btn">Cancelar</a>
</div>
</form>