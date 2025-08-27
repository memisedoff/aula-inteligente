@extends('layouts.app')
@section('title', 'Nueva materia')
@section('content')
@include('partials.flash')


<div class="page-header">
<h1 class="title">Nueva materia</h1>
</div>


<div class="card">
<div class="card-body">
@include('materias._form')
</div>
</div>
@endsection