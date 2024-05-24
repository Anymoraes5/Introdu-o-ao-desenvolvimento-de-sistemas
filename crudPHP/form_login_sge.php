<?php include 'header.php'; ?>

<h2>Login painel de sistema </h2>
<form action="valida_login_aluno.php" method="post">
<div class="mb-3 mt-3" align ="center" >
    <label for="login_sge"  style="width:10em;"  > Nome de usuário: </label><br>
    <input type="text" name="login_sge" id="login_sge" placeholder="Informe o nome de usuário" class="form-control" 
    style="width:20cm;"  ><br>
</div>
<!--  //class="mb-3 mt-3" -->
<div id ="botao" align ="center"> 
    <label for="password_sge" >Senha:</label>
    <input type="password" name="password_sge" id="password_sge" placeholder="Informe sua senha" class="form-control"
    style="width:20cm;" ><br>
</div>

<div  align ="center" >
    <input type="submit" value="Logar no sistema"class="btn btn-primary" style="width:20cm;"   >
</div>

</form> <br>

<div align="center" class="validacao">
    <h6><a href="#"  style="display:flex; "  >Esqueceu sua senha?</a></h6>
    <h6><a href="form_cadastro_login.php"  style="display:flex;" >Cadastre-se</a></h6>
    <!-- comando em php para validar os campos de login com sessao  -->
</div>


<?php
    //iniciar uma sessao 
    session_start ();
    if(isset($_SESSION['mensagem'])){
        
        $mensagem = $_SESSION ['mensagem'];
        

        echo "<h3>" .$mensagem. "</h3>";

        unset($_SESSION['mensagem']);
    }
?>

<div >
    <a href="index.php" class="btn btn-warning" style="width:20cm;"> Voltar </a>
</div>


<?php include 'footer.php'; ?>