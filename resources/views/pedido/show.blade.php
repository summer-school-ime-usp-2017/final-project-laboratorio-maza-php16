@extends('layouts.master')

@section('title', 'Detalhes do Pedido')

@section('page-header-content', 'Detalhes do Pedido')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/pedidos">Pedidos</a>
    </div>
  </div>
</div>
<div class="col-md-6">
    <div class="form-group">
      <label>Nome do Médico:</label> {{$pedido->medico->nome}}
    </div>
    <div class="form-group">
      <label>Nome do Paciente:</label> {{$pedido->paciente->nome}}
    </div>
    <div class="form-group">
      <label>Exames</label><br/>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Método</th>
          </tr>
        </thead>
        <tbody>
           @foreach($pedido->exames as $exame)
          <tr>
            <td>{{ $exame->nome }}</td>
            <td>{{ $exame->metodo }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
</div>
@endsection
