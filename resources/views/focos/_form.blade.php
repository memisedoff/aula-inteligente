@php($editing = isset($foco))
<form action="{{ $editing ? route('focos.update',$foco) : route('focos.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Aula</label>
<input class="input" name="aula_id" type="number" required value="{{ old('aula_id',$foco->aula_id ?? '') }}"></div>
<div class="form-group"><label class="label">Estado</label>
<select class="input" name="estado">
@php($val = old('estado', $foco->estado ?? 'off'))
<option value="on" {{ $val==='on'?'selected':'' }}>Encendido</option>
<option value="off" {{ $val==='off'?'selected':'' }}>Apagado</option>
</select>
</div>
<div class="form-group"><label class="label">Potencia (W)</label>
<input class="input" name="potencia" type="number" value="{{ old('potencia',$foco->potencia ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('focos.index') }}" class="btn">Cancelar</a>
</div>
</form>