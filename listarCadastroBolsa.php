<?php include ("header.php"); ?>


<div class="container" style="margin-top:30px; margin-bottom:30px">
    <h1>Lista de usuários cadastrados</h1>

    <?php
        include ("conexaoBD.php");

        $listarCadastroBolsa = "SELECT * FROM usuarios";
        $res = mysqli_query($link, $listarCadastroBolsa) or die ("<div class='alert-danger'> <strong>ERRO!</strong>ao tentar listar usuario(a)</div>"); 
        $totalUsuarios = mysqli_num_rows($res); 

        echo "<h2>Total de usuários cadastrados: $totalUsuarios</h2>";



        // tabela para exibir os registros
        echo "
            <table class='table'>
                <thead class='thead-light'>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Endereço</th>
                        <th>Estado</th>
                        <th>Data de Nascimento</th>
                        <th>Sexo</th>
                        <th>Renda</th>
                        <th>Email</th>                                 
                    </tr>
                </thead>";

                while($registro = mysqli_fetch_assoc($res)){ // varre a tabela em busca de registros armazenados no Banco de dados (cada linha) e armazena no array registo
                    $id             = $registro["id"];// cria a variavel e atribui o registro encontrado a ela
                    $localDaFoto    = $registro["foto"];
                    $nome           = $registro["nome"];
                    $cpf            = $registro["cpf"];
                    $endereco       = $registro["endereco"];
                    $estado         = $registro["estado"];
                    $dataNascimento = $registro["dataNascimento"];
                    $dia            = substr($dataNascimento, 8, 2); // substr pega somente um parte de uma string, nesse caso vai pegar o dia da dataNascimento, 8 quer dizer que é pra pegar o valor da posiçao 8, o 2 quer dizer que é pra pegar dois valore no caso da posição 8 e 9.
                    $mes            = substr($dataNascimento, 5, 2);
                    $ano            = substr($dataNascimento, 0, 4);
                    $dataNascimento = ("$dia/$mes/$ano");
                    $sexo           = $registro["sexo"];
                    $renda          = $registro["renda"];
                    $email          = $registro["email"];

                    // criando as linha da tabela com os registro encontrados
                    echo"
                        <tbody>
                            <tr>
                                <td>$id</td>
                                <td><img src = '$localDaFoto' width='100'></td>
                                <td>$nome</td>
                                <td>$cpf</td>
                                <td>$endereco</td>
                                <td>$estado</td>
                                <td>$dataNascimento</td>
                                <td>$sexo</td>
                                <td>$renda</td>
                                <td>$email</td>
                            </tr>
                        </tbody>";        
                }
            echo"</table>";
    ?>  

</div>
<?php include ("footer.php");?>