<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
  </head>
  <body>
    <div class="col-md-12">
      <h3>@yield('page-header-content')</h3>
      <br/>
      @yield('content')
    </div>




    </div>
    <footer class="container-fluid navbar-bottom">
      <div class="row content">
        <div class="col-md-12 panel panel-body">
          <ul class="nav">
            <li}}><a href="/">Inicio</a></li>
            <li><a href="/exames">Exames</a></li>
            <li><a href="/medicos">Médicos</a></li>
            <li><a href="/pacientes">Pacientes</a></li>
            <li><a href="/pedidos">Pedidos</a></li>
            <p class="text-center">Elaboração: Henrique Ramos</p>
          </ul>
        </div>
      </div>
    </footer>

    <script src="/js/app.js" type="text/javascript"></script>
  </body>
</html>
