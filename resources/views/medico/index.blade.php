@extends('layouts.master')

@section('title', 'Medicos')

@section('page-header-content', 'Medicos')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
      <div class="panel-body">
        <a href="/medicos/cria">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar Médico
        </a>
      </div>

    </div>
  </div>
  <div class="col-md-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>CRM</th>
          <th>E-mail</th>
        </tr>
      </thead>
      <tbody>
        @foreach($medicos as $medico)
          <tr>
            <td>{{ $medico->id}}</td>
            <td>{{ $medico->nome }}</td>
            <td>{{ $medico->crm }}</td>
            <td>{{ $medico->email }}</td>
            <td><a href="/medicos/{{$medico->id}}">Detalhes</a></td>
            <td><a href="/medicos/{{$medico->id}}/edita">Editar</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
