@extends('layouts.master')

@section('title', 'Edicao dos Pacientes')

@section('page-header-content', 'Edicao dos Pacientes')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/pacientes">
	  Pacientes
	</a>
      </div>
      <div class="panel-body">
	<a href="/pacientes/{{$paciente->id}}">
	  Detalhes do Paciente
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <form action="/pacientes/{{$paciente->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input name="nome" id="nome" type="text" class="form-control"  value="{{$paciente->nome}}">
      </div>
      <div class="form-group">
	<label for="email">E-mail</label>
	<input name="email" id="email" type="text" class="form-control" value="{{$paciente->email}}">
      </div>
      <button class="btn btn-primary">Atualizar</button>
    </form>
  </div>
</div>

@endsection
