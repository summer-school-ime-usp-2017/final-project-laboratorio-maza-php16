@extends('layouts.master')

@section('title', 'Detalhes do Médico')

@section('page-header-content', 'Detalhes do Médico')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/medicos">
    Médicos
	</a>
      </div>
      <div class="panel-body">
	<a href="/medicos/{{$medico->id}}/edita">
	  Editar
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-primary">

      <div class="panel-heading"><strong>Médico</strong></div>

      <ul class="list-group">
	<li class="list-group-item">{{ $medico->nome }}</li>
	<li class="list-group-item">{{ $medico->email }}</li>
  <li class="list-group-item">{{ $medico->crm }}</li>
      </ul>
    </div>
  </div>
</div>
@endsection
