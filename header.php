<!DOCTYPE html>
<html lang="en">

<head">
    <title>Pet Shop Fera</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: darkgrey;
        }

        /* Add a color background color to the top navigation */
        .topnav {
            background-color: dodgerblue;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: darkblue;
            color: #f2f2f2;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: darkblue;
            color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0;">
        <!-- jumbotron cabeçalho com o logo-->
        <img src="image/logo.png" whidth="150" height="150" title="PET SHOP FERA">
        <figcaption>PET SHOP FERA</figcaption>
    </div>

    <nav class="topnav navbar-expand-sm navbar-dark">
        <!-- barra de navegaçao "nav"-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="formCadastro.php">Cadastrar </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listarCadastroBolsa">Listar </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fomrPesquisarCadastroBolsa">Pesquisar Cadastro </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login </a>
                </li>
            </ul>
        </div>
    </nav>