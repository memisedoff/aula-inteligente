@php($editing = isset($reserva))
<form action="{{ $editing ? route('reservas.update',$reserva) : route('reservas.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Aula</label>
<input class="input" name="aula_id" type="number" required value="{{ old('aula_id',$reserva->aula_id ?? '') }}"></div>
<div class="form-group"><label class="label">Docente (opcional)</label>
<input class="input" name="docente_id" type="number" value="{{ old('docente_id',$reserva->docente_id ?? '') }}"></div>
<div class="form-group"><label class="label">Fecha</label>
<input class="input" type="date" name="fecha" value="{{ old('fecha',$reserva->fecha ?? '') }}"></div>
<div class="form-group"><label class="label">Hora inicio</label>
<input class="input" type="time" name="hora_inicio" value="{{ old('hora_inicio',$reserva->hora_inicio ?? '') }}"></div>
<div class="form-group"><label class="label">Hora fin</label>
<input class="input" type="time" name="hora_fin" value="{{ old('hora_fin',$reserva->hora_fin ?? '') }}"></div>
<div class="form-group"><label class="label">Motivo</label>
<input class="input" name="motivo" value="{{ old('motivo',$reserva->motivo ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('reservas.index') }}" class="btn">Cancelar</a>
</div>
</form>