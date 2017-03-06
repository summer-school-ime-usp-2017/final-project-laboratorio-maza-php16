@extends('layouts.master')

@section('title', 'Pacientes')

@section('page-header-content', 'Pacientes')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/pacientes/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Cadastrar Paciente
          </a>
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pacientes as $paciente)
            <tr>
              <td>{{ $paciente->nome }}</td>
              <td>{{ $paciente->email }}</td>
              <td>{{ $paciente->cpf}}</td>
              <td><a href="/pacientes/{{$paciente->id}}">Detalhes</a></td>
              <td><a href="/pacientes/{{$paciente->id}}/edita">Editar</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
