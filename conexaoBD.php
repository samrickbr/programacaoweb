<?php

    //include "header.php"; //incluindo o header 

    $servidorBD = "localhost"; // define qual servidor vai ser acessado
    $usuarioBD  = "root"; // usuario que fara o acesso, o padrao do xamp é o root;
    $senhaBD    = ""; // a senha por padrao é vazia: "";
    $baseBD     = "tads3"; // nome da base de dados criado no phpmyadmin

    $link = mysqli_connect($servidorBD, $usuarioBD, $senhaBD, $baseBD); // faz a conexao com o mysqli


    if (!$link){
        echo "<div class='alert-danger'>
                Erro ao tentart conectar ao <strong>banco de dados!</strong>
              </div>"; 
    }
    else{
        echo "<div class='alert-success'>
        Conectado ao servidor com <strong>Êxito!</strong>
      </div>"; 

    }
    




?>