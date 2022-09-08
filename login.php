<!DOCTYPE html>
<!-- importação do header na página -->
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
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

   /* Set a style for the submit/register button */
   .submit {
        background-color: darkblue;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 49.5%;
        opacity: 0.9;
    }
    .submit:hover {
        opacity: 0.8;
        background-color: green;
    }
    /* Set a style for the submit/register button */
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

</style>

<html>

<body>
    <form action="action_page.php" method="post">
        <br>

        <div class="container" style="align-content: space-around;">
            <div class="imgcontainer">
                <img src="image/avatar.jpg" alt="Avatar" class="avatar" 
                width="100px" height="100px" style="margin-left: 45.5%;">
            </div>
            <br>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Entre com seu Username" 
            name="username" required>
            <br>

            <label for="senha"><b>Senha</b></label>
            <input type="password" placeholder="Insira sua senha" 
            name="senha" required>
            <br>

            <button type="submit" class="submit">Login</button>
            <button type="button" class="cancelbtn">Cancelar</button>
            <br>

            <label>
                <input type="checkbox" checked="checked" name="lembrar">
                Lembrar de mim.
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <span class="senha">Não tem uma 
                <a href="formCadastro.php">conta?</a></span>
        </div>
    </form>
</body>

</html>
</php>