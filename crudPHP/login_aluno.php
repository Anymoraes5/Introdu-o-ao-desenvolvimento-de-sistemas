<?php include 'header.php'; ?>

<h2>Login painel de sistema </h2>
<form action="valida_login_aluno.php" method="post">
<div class="mb-3 mt-3">
    <label for="nome_aluno">Nome de usuário : </label>
    <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Informe o nome de usuário" class="form-control" ><br>
</div>

<div class="mb-3 mt-3">
    <label for="email_aluno">senha:</label>
    <input type="passaword" name="email_aluno" id="email_aluno" placeholder="Informe sua senha" class="form-control"><br>
</div>

<div class="d-grid">
    <input type="submit" value="Logar no sistema"class="btn btn-primary">
</div>
</form> <br>

<div class="d-grid">
    <a href="index.php" class="btn btn-warning"> Voltar </a>
</div>


<?php include 'footer.php'; ?>