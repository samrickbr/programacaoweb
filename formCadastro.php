<!DOCTYPE html>
<html>
<?php require "header.php" ?>

<style>
    * {
        box-sizing: border-box
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit/register button */
    .registerbtn {
        background-color: darkblue;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 49.5%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 0.8;
        background-color: green;
    }

    .cancelbtn {
        background-color: darkblue;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 49.5%;
        opacity: 0.9;
    }

    .cancelbtn:hover {
        opacity: 0.8;
        background-color: red;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
</style>


<body>

    <form action="action_page.php">
        <div class="container">
            <h1>Cadastrar usuario</h1>
            <p>Preencha este cadastro para criar uma conta.</p>
            <hr>
            <table class="center">
                <tr>
                    <th>
                        <label for="nome"><b>Nome Completo</b></label>
                        <input type="text" placeholder="Entre com seu Nome Completo" 
                        name="nome" id="nome" required>
                    </th>
                </tr>

                <tr>
                    <th>
                        <label for="cpf"><b>CPF</b></label>
                        <input type="text" placeholder="Entre com seu CPF"
                         name="cpf" id="cpf" required>
                    </th>
                    <th>
                        <label for="telefone"><b>Telefone</b></label>
                        <input type="text" placeholder="Telefone..." 
                        name="telefone" id="telefone" required>
                    </th>
                </tr>

                <tr>
                    <th>
                        
                    </th>
                </tr>
            </table>



            <label for="cep"><b>CEP</b></label>
            <input type="text" placeholder="CEP..." name="cep" id="cep" required>

            <label for="endereco"><b>Endereço</b></label>
            <input type="text" placeholder="Endereço..." name="endereco" id="endereco">

            <label for="bairro"><b>Bairro</b></label>
            <input type="text" placeholder="Entre com seu Nome" name="bairro" id="bairro" required>

            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Entre com seu E-mail" name="email" id="email" required>

            <label for="psw"><b>Senha</b></label>
            <input type="password" placeholder="Entre com a senha" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repetir a Senha</b></label>
            <input type="password" placeholder="Repita sua Senha" name="psw-repeat" id="psw-repeat" required>
            <hr>

            <button type="submit" class="registerbtn">Cadastrar</button>
            <button type="button" class="cancelbtn">Cancelar</button>
        </div>

        <div class="container signin">
            <p>Já tem uma conta? <a href="login.php">Fazer Login</a>.</p>
        </div>
    </form>

</body>

</html>