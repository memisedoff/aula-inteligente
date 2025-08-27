{{-- aires/_form.blade.php --}}
@php($editing = isset($aire))
<form action="{{ $editing ? route('aires.update',$aire) : route('aires.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Aula</label>
<input class="input" name="aula_id" type="number" required value="{{ old('aula_id',$aire->aula_id ?? '') }}"></div>
<div class="form-group"><label class="label">Modo</label>
@php($val = old('modo',$aire->modo ?? 'auto'))
<select class="input" name="modo">
<option value="frio" {{ $val==='frio'?'selected':'' }}>Frío</option>
<option value="calor" {{ $val==='calor'?'selected':'' }}>Calor</option>
<option value="auto" {{ $val==='auto'?'selected':'' }}>Auto</option>
</select>
</div>
<div class="form-group"><label class="label">Temperatura (°C)</label>
<input class="input" name="temperatura" type="number" value="{{ old('temperatura',$aire->temperatura ?? 24) }}"></div>
<div class="form-group"><label class="label">Estado</label>
@php($e = old('estado',$aire->estado ?? 'off'))
<select class="input" name="estado">
<option value="on" {{ $e==='on'?'selected':'' }}>Encendido</option>
<option value="off" {{ $e==='off'?'selected':'' }}>Apagado</option>
</select>
</div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('aires.index') }}" class="btn">Cancelar</a>
</div>
</form>