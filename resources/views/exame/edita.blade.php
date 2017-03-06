@extends('layouts.master')

@section('title', 'Edicao dos Exames')

@section('page-header-content', 'Edicao dos Exames')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/exames">
	  Exames
	</a>
      </div>
      <div class="panel-body">
	<a href="/exames/{{$exame->id}}">
	  Detalhes do Exame
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <form action="/exames/{{$exame->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input name="nome" id="nome" type="text" class="form-control"  value="{{$exame->nome}}">
      </div>
      <div class="form-group">
	<label for="metodo">Metodo</label>
  <input name="metodo" id="metodo" type="text" class="form-control" value="{{$exame->metodo}}">
      </div>
      <button class="btn btn-primary">Atualizar</button>
    </form>
  </div>
</div>

@endsection
