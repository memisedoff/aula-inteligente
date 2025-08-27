@php($editing = isset($docente))
<form action="{{ $editing ? route('docentes.update',$docente) : route('docentes.store') }}" method="POST" class="form vstack gap">
@csrf @if($editing) @method('PUT') @endif
<div class="form-group"><label class="label">Nombre</label>
<input class="input" name="nombre" required value="{{ old('nombre',$docente->nombre ?? '') }}"></div>
<div class="form-group"><label class="label">Apellido</label>
<input class="input" name="apellido" required value="{{ old('apellido',$docente->apellido ?? '') }}"></div>
<div class="form-group"><label class="label">Email</label>
<input class="input" type="email" name="email" value="{{ old('email',$docente->email ?? '') }}"></div>
<div class="form-group"><label class="label">Teléfono</label>
<input class="input" name="telefono" value="{{ old('telefono',$docente->telefono ?? '') }}"></div>
<div class="form-actions">
<button class="btn primary">{{ $editing ? 'Guardar cambios' : 'Crear docente' }}</button>
<a href="{{ route('docentes.index') }}" class="btn">Cancelar</a>
</div>
</form>