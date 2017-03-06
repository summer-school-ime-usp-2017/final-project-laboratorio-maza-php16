@extends('layouts.master')

@section('title', 'Cadastro de Exames')

@section('page-header-content', 'Cadastro de Exames')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/exames">
	  <span class="glyphicon glyphicon-th-list"></span> Exames
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <form action="/exames" method="POST">
      {{csrf_field()}}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input name="nome" id="nome" type="text" class="form-control">
      </div>
      <div class="form-group">
	<label for="email">Método</label>
	<input name="metodo" id="metodo" type="text" class="form-control">
      </div>
      <button class="btn btn-primary">Salvar</button>
    </form>
  </div>
</div>
@endsection
