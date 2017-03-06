@extends('layouts.master')

@section('title', 'Cadastro de Médicos')

@section('page-header-content', 'Cadastro de Médicos')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/medicos">
	  <span class="glyphicon glyphicon-th-list"></span> Médicos
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <form action="/medicos" method="POST">
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
  <label for="crm">CRM</label>
  <input name="crm" id="crm" type="text" class="form-control">
      </div>
  </div>
      <button class="btn btn-primary">Salvar</button>
    </form>
  </div>
</div>
@endsection
