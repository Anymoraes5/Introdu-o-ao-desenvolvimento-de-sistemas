<?php include 'header.php'; ?>

<form action="cadastro.php" method="post">
<div class="mb-3 mt-3">
    <label for="nome_aluno">Nome completo: </label>
    <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Informe o nome completo" class="form-control" ><br>
</div>

<div class="mb-3 mt-3">
    <label for="email_aluno">Email:</label>
    <input type="text" name="email_aluno" id="email_aluno" placeholder="Informe o email" class="form-control"><br>
</div>

<div class="mb-3 mt-3">
    <label for="telefone_aluno">Telefone:</label>
    <input type="text" name="telefone_aluno" id="telefone_aluno" placeholder="Informe seu telefone ou celular" class="form-control"><br>
</div>
<div class="d-grid">
    <input type="submit" value="Cadastrar aluno"class="btn btn-primary" <?php 
    if ()
    ?>
    >
</div>
</form> <br>

<div class="d-grid">
    <a href="index.php" class="btn btn-warning"> Voltar </a>
</div>


<?php include 'footer.php'; ?>