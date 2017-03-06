@extends('layouts.master')

@section('title', 'Inicio')

@section('page-header-content', 'Projeto: Laboratório')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h4>Atribuições</h4>
    <ul class="list-group">
      <li class="list-group-item">Conexão com Banco de Dados com 4 entidades:</li>
            <ul class="title m-b-md">
              <li>Pacientes</li>
              <li>Médicos</li>
              <li>Exames</li>
              <li>Pedidos de Exames</li>
            </ul>
      <li class="list-group-item">Cadastro e edição de pacientes, médicos, exames e pedidos de exames</li>
      <li class="list-group-item">Conexão entre as tabelas com recursos de chaves primarias e secundárias</li>
    </ul>

  </div>
</div>
@endsection
