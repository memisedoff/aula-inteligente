@extends('layouts.app')
@section('title', 'Editar materia')
@section('content')
@include('partials.flash')


<div class="page-header">
<h1 class="title">Editar materia</h1>
</div>


<div class="card">
<div class="card-body">
@include('materias._form', ['materia' => $materia])
</div>
</div>
@endsection