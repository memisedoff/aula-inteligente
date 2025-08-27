@extends('layouts.app')
@section('title','Editar docente')
@section('content')
@include('partials.flash')
<div class="page-header"><h1 class="title">Editar docente</h1></div>
<div class="card"><div class="card-body">@include('docentes._form',['docente'=>$docente])</div></div>
@endsection