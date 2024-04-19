<?php include 'header.php'; ?>

<form action="cadastro.php" method="post">
    <label for="nome_aluno">Nome completo: </label>
    <input type="text" name="nome_aluno" id="nome_aluno">
    <label for="email_aluno">Email:</label>
    <input type="text" name="email_aluno" id="email_aluno">
    <label for="telefone_aluno">Telefone:</label>
    <input type="text" name="telefone_aluno" id="telefone_aluno">
    <input type="submit" value="Cadastrar aluno">
</form>


<?php include 'footer.php'; ?>