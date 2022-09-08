<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0"> <!-- jumbotron cabeçalho com o logo-->
  <img src="img/logo.jpg" whidth="100" height="100">  
</div>

    <nav class="navbar navbar-expand-sm bg-success navbar-dark"> <!-- barra de navegçao "nav"-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="formCadastroBolsa.php">Cadastrar </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listarCadastroBolsa">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fomrPesquisarCadastroBolsa">Pesquisar Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FormloginCBolsa">Login</a>
                </li>    
            </ul>
        </div>  
    </nav>