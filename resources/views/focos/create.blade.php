@extends('layouts.app')
@section('title','Nuevo docente')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Nuevo docente</h1></div>
<div class="card"><div class="card-body">@include('docentes._form')</div></div>
@endsection
