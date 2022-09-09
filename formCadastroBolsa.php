<?php include "header.php" ?>

<div class="container" style="margin-top:30px; margin-bottom:30px"> <!-- container  principal o formulario  da pagina tudo que esta em baixo do cabeçalho ate antes do rodapé-->
    <h2>Cadastro do Município de Imbaú</h2> 
    <p><span>*Campo obrigatório</span><p>
    <form action="actionCadastroBolsa.php" method="POST" name="formBolsa" enctype="multipart/form-data">
        <div class="form-group">
            <label for="foto">Foto: </label>
            <input type="file" class="btn btn-link" id="foto" name="foto">
        </div>

        <div class="form-group">
            <label for="nome">*Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome..." name="nome">
         </div>

        <div class="form-group">
            <label for="cpf">*CPF:</label>
             <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF..." name="cpf" maxlength="14">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <textarea class="form-control" id="endereco" name="endereco" ></textarea> 
        </div>

        <div class="form-group">
            <label for="dataNascimento">*Data de Nascimento:</label>
             <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
         </div>

        <label for="sexo">*Sexo:</label>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="sexo" value="M">Masculino
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="sexo" value="F">Feminino
            </label>
        </div>
        <br>

        <label for="renda">*Renda Familiar:</label>
         <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="renda" value="renda1">R$ 500,00 á 1000,00
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="renda" value="renda2">R$ 1000,00 á 1500,00
            </label>
        </div>
        <br>
               
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado">
                <option value="PR">Paraná</option>
                <option value="SC">Santa Catarina</option>
                <option value="RS">Rio Grande Do Sul</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">*Email:</label>
            <input type="email" class="form-control" id="nome" placeholder="Digite seu email..." name="email">
        </div>

        <div class="form-group">
            <label for="senha">*Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite uma senha..." name="senha">
        </div>

        <div class="form-group">
            <label for="confirmaSenha">*Confirme seu senha:</label>
            <input type="password" class="form-control" id="confirmaSenha" placeholder="Confirme sua senha..." name="confirmaSenha">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form> 
</div>

<?php include "footer.php" ?>

