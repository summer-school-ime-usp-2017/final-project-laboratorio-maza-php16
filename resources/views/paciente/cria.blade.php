@extends('layouts.master')

@section('title', 'Cadastro de Paciente')

@section('page-header-content', 'Cadastro de Paciente')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/pacientes">
	  <span class="glyphicon glyphicon-th-list"></span> Pacientes
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <form action="/pacientes" method="POST">
      {{csrf_field()}}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input name="nome" id="nome" type="text" class="form-control">
      </div>
      <div class="form-group">
	<label for="email">E-mail</label>
	<input name="email" id="email" type="text" class="form-control">
      </div>
      <div class="form-group">
	<label for="cpf">CPF</label>
	<input name="cpf" id="cpf" type="number" class="form-control">
      </div>
      <button class="btn btn-primary">Salvar</button>
    </form>
  </div>
</div>
@endsection
