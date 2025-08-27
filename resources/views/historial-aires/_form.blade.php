{{-- historial-aires/_form.blade.php --}}
@php($editing = isset($historial))
<form action="{{ $editing ? route('historial-aires.update',$historial) : route('historial-aires.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Aire</label>
<input class="input" name="aire_id" type="number" required value="{{ old('aire_id',$historial->aire_id ?? '') }}"></div>
<div class="form-group"><label class="label">Acción</label>
<input class="input" name="accion" value="{{ old('accion',$historial->accion ?? '') }}"></div>
<div class="form-group"><label class="label">Valor</label>
<input class="input" name="valor" value="{{ old('valor',$historial->valor ?? '') }}"></div>
<div class="form-group"><label class="label">Fecha</label>
<input class="input" type="datetime-local" name="fecha" value="{{ old('fecha',$historial->fecha ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar' : 'Crear' }}</button>
<a href="{{ route('historial-aires.index') }}" class="btn">Cancelar</a>
</div>
</form>