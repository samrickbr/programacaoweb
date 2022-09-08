<?php include "header.php" ?> <!-- -->


<div class="container" style="margin-top:30px; margin-bottom:30px">
    <?php 
         $foto = $renda = $nome = $cpf = $dataNascimento = $sexo =   $email = $senha = $endereco = $estado = $confirmaSenha ="" ; //Todas as variavesi estao sendo inicializadas vazias//

        $tudoCerto = true; //criando varizvel para testar se os campos foram preenchidos //
        if ($_SERVER["REQUEST_METHOD"] == "POST"){ //"REQUEST_METHOD" VERIFICASE O FORMULARIO FOI ENVIADO pelo metodo POST //
            if(empty($_POST["nome"])) {   // "empty" verifica se o "nome" passado como POST esta vazio//
                //se estiver vazio irá aparecer essa mensagem // 
                echo "<div class='alert alert-warning'> 
                        Atenção! O campo <strong>NOME</strong> é obrigatorio.  
                     </div>";  
            }
        
            else { // se nao estiver vazia
                    $nome = testar_input($_POST["nome"]); // vai verificar e limpar os dados passados como POST no campo NOME  do formulario
                if (!preg_match("/^[a-zA-Z-' ]* /", $nome)){ // vai testar se no nome recebido tem numero ou caracteres
                        // se tiver vai dar essa mensagem
                    echo "<div class='alert alert-warning'> Atenção! No campo <strong>NOME</strong> somente letras são permitidas.  </div>";
                    $tudoCerto = false;    
                }
            }

            if (empty($_POST["cpf"])) { // testando se o campo cpf esta vazio
                    // se estivar passar essa mensagem
                echo "<div class='alert alert-warning'> 
                    Atenção! O campo <strong>CPF</strong> é obrigatorio.  
                    </div>";
                    $tudoCerto = false;      
            }
            else { // se nao estiver com funçao testar input vai limpar se tiver caracteres
                $cpf = testar_input($_POST["cpf"]);
                
            }


            if (empty($_POST["email"])) { // testando se o campo email esta vazio
                // se estivar passar essa mensagem
                echo "<div class='alert alert-warning'> 
                Atenção! O campo <strong>EMAIL</strong> é obrigatorio.  
                </div>";
                $tudoCerto = false;  
            }
            else { // se nao estiver com funçao testar input vai limpar se tiver caracteres
                $email = testar_input($_POST["email"]);
                
            }

            if (empty($_POST["senha"])) { // testando se o campo email esta vazio
                    // se estivar passar essa mensagem
                echo "<div class='alert alert-warning'> 
                Atenção! O campo <strong>SENHA</strong> é obrigatorio.  
                </div>";
                $tudoCerto = false;  
            }
            else { // se nao estiver com funçao testar input vai limpar se tiver caracteres e "md5" criptografa a senha para esconder de hacker convertendo em letras fegrh4h
                $senha = md5 (testar_input($_POST["senha"]));
                
            }

            if (empty($_POST["confirmaSenha"])) { // testando se o campo confirmaSenha se esta vazio
                // se estivar passar essa mensagem
                echo "<div class='alert alert-warning'> 
                Atenção! O campo <strong>CONFIRMAR SENHA</strong> é obrigatorio.  
                </div>"; 
                $tudoCerto = false;             
            }
            else {
                $confirmaSenha = md5 (testar_input($_POST["confirmaSenha"]));
                if ($senha != $confirmaSenha) {
                        echo "<div class='alert alert-warning'> 
                        Atenção! As senhas <strong>NÃO CONFEREM</strong> 
                    </div>"; 
                }
            }
                // TESTANDO AS VARIAVEIS QUE NAO SAO OBRIGATORIAS NO FORMULARIO
            $endereco = testar_input($_POST["endereco"]);
            $estado = testar_input($_POST["estado"]);
            $dataNascimento = testar_input($_POST["dataNascimento"]);

            //echo "<p>Endereço: $endereco</p>";
            //echo "<p>Estado: $estado</p>";
            //echo "<p>Data de Nascimento: $dataNascimento</p>";

            if (strlen($dataNascimento) == 10){ // strlen verifica o tamanho da string,  esta verificando se dataNascimento tem tamnho 10
                $dia = substr($dataNascimento, 8, 2); // substr pega somente um parte de uma string, nesse caso vai pegar o dia da dataNascimento, 8 quer dizer que é pra pegar o valor da posiçao 8, o 2 quer dizer que é pra pegar dois valore no caso da posição 8 e 9.
                $mes = substr($dataNascimento, 5, 2);
                $ano = substr($dataNascimento, 0, 4);

                if(!checkdate($mes, $dia, $ano)){
                    echo "<div class='alert alert-warning'> 
                    Atenção! Atenção <strong>DATA</strong>inválida.  
                    </div>";
                    $tudoCerto = false;   

                }

            }
            else {
                echo "<div class='alert alert-warning'> 
                    Atenção! Atenção <strong>DATA</strong>inválida, use o formato  DD-MM-AAAA  
                    </div>"; 
            }
        }

        $sexo = testar_input($_POST["sexo"]);
        

        if(isset($_POST["renda"])){   // "isset quer dizer se estiver marcado, vai verificar se o checkbos 1salario esta marcado"
            $renda == "renda1";
            $renda = "500 - 1000";

        }
        else{
            $renda = "renda2";
            $renda = "1000 - 1500";
        }

    



        // funçao para testar as entradas de dados para evitar exploração
        function testar_input ($dado) {
            $dado = trim($dado); //  "trim"remove os caractres  desnecessarios, (espaçamentos, tabs... )
            $dado = stripslashes($dado); // "stripslashes" remove as barras invertidas (\\)
            $dado = htmlspecialchars($dado); // converte caracteres especiais em entidades HTML
            return $dado;
        }

        $diretorio = "img/"; // definindo qual sera o diretorio q receberá a foto = img
        $localDaFoto = $diretorio.basename($_FILES["foto"]["name"]);
        $uploadOk = 1; // se estiver tudo certo com o upload atribui valor 1 senhao 0
        $tipoDaImagem = strtolower(pathinfo($localDaFoto,PATHINFO_EXTENSION));

        /// checa o tamanho do arquivo
        if($_FILES["foto"]["size"] > 5000000){ // verifica  o tamanho da foto em byts
            echo "<div class='alert alert-warning'> 
                    Atenção! Atenção a foto ultrapassa o <strong>TAMANHO MáXIMO</strong> permitido 5mb.  
                    </div>";
            $uploadOk = 0;         
        }

        // checa o tipo da imagen
        if ($tipoDaImagem != "jpg" && $tipoDaImagem != "png" && $tipoDaImagem != "jpeg"){
            echo "<div class='alert alert-warning'> 
                    Atenção! foto precisa estar nos formatos <strong>jpg, png ou jpeg</strong> para ser válida.  
                    </div>";
        }

        if($uploadOk == 0){
            echo "<div class='alert alert-warning'> 
            Atenção!Erro ao tentar fazer o UPLOAD da<strong>FOTO</strong>.  
            </div>";
        }
        else{
            if(!move_uploaded_file($_FILES["foto"]["tmp_name"],$localDaFoto)){ // se der erro ao mover  a foto para o destino
                echo "<div class='alert alert-warning'> 
                Atenção!Erro ao tentar fazer o UPLOAD da<strong>FOTO</strong>.  
                </div>";
                $uploadOk = 0;

            }
        }

        if ($tudoCerto && $uploadOk){

            include("conexaoBD.php");
            $inserirUsuario = "INSERT INTO usuarios (foto, nome, cpf, endereco, dataNascimento, sexo, renda, estado, email, senha)
                            VALUE ('$localDaFoto', '$nome', '$cpf', '$endereco', '$dataNascimento', '$sexo', '$renda', '$estado', '$email', '$senha')";

            if(mysqli_query($link, $inserirUsuario)){ // a variavel mysqli_query() executa a query, sao necessarios doi parametros: a variavel de conexao e a variavel que deseja executar 
            echo "<div class='alert-success'> <strong>Usuario(a)</strong>cadastrado com sucesso</div>";
            
            }
            else {
                echo "<div class='alert-danger'> <strong>ERRO!</strong>ao tentar cadastrar usuario(a)</div>".mysqli_error($link);
                //echo "<p>$inserirUsuario</p>";   
            }  



            echo"
            <div class='table-responsive'>
                <table class='table table-striped'>
                    <tr>
                        <th>FOTO</th>
                        <td><p style='algin:center'><img src='$localDaFoto' width='150'></p></td>
                    </tr>

                    <tr>
                        <th>NOME:</th>
                        <td>$nome</td>
                    </tr>

                    <tr>
                        <th>CPF:</th>
                        <td>$cpf</td>
                    </tr>

                    <tr>
                        <th>ENDEREÇO:</th>
                        <td>$endereco</td>
                    </tr>
                    
                     <tr>
                        <th>Data de Nascimento:</th>
                        <td>$dia/$mes/$ano</td>
                    </tr>  
                    
                     <tr>
                        <th>Sexo:</th>
                        <td>$sexo</td>
                    </tr> 
                    
                     <tr>
                        <th>Renda Familiar:</th>
                        <td>$renda</td>
                    </tr> 

                    <tr>
                        <th>Email:</th>
                        <td>$email</td>
                    </tr>         
                </table>
            </div>         
        
        ";
        }


        
    ?>



</div>



<?php include "footer.php" ?>
