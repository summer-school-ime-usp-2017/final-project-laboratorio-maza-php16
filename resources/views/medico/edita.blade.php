@extends('layouts.master')

@section('title', 'Edicao dos Médicos')

@section('page-header-content', 'Edicao dos Médicos')

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
	<a href="/medicos/{{$medico->id}}">
	  Detalhes do Médico
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <form action="/medicos/{{$medico->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="form-group">
  <label for="nome">Nome</label>
  <input name="nome" id="nome" type="text" class="form-control"  value="{{$medico->nome}}">
      </div>
      <div class="form-group">
  <label for="email">E-mail</label>
  <input name="email" id="email" type="text" class="form-control" value="{{$medico->email}}">
      </div>
      <div class="form-group">
  <label for="crm">CRM</label>
  <input name="crm" id="crm" type="text" class="form-control" value="{{$medico->crm}}">
      </div>
      <button class="btn btn-primary">Atualizar</button>
    </form>
  </div>
</div>

@endsection
