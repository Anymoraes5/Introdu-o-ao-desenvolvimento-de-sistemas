<?php 
    include 'header.php'; 

    //iniciar sessao em php
    session_start ();

    //recuperando o array de um usuario da sessao e armazenamento 
    $usuario = $_SESSION['usuario'];

    //verificar se o perfil de acesso ao sistema
    if($usuario['perfil'] != "admin"){ ?>
        <!-- conteudo em html perfil aluno -->
        <div class="d-grid">
            
            <a href="listar_alunos.php"class="btn btn-primary"> 𝐋𝐢𝐬𝐭𝐚𝐫 𝐚𝐥𝐮𝐧𝐨𝐬 </a>
        </div>
        <!-- fim do conteudo em html -->
    <?php
    }
    else{ ?>
        <!-- conteudo em html do -perfil admin-  -->
        <h2>Painel administrativo - SGE</h2>
        <br>
        <hr>
        <p>Você a permissão de acesso: <?php echo $usuario['perfil'];?></p>
        <h3>Seja Bem-viado: <?php echo $usuario['login'];?> </h3>
        <div class="d-grid">
            <a href="form_cad_aluno.php"  class="btn btn-primary" > 𝐂𝐚𝐝𝐚𝐬𝐭𝐫𝐚𝐫 𝐚𝐥𝐮𝐧𝐨 </a> <br>
            <a href="listar_alunos.php"class="btn btn-primary"> 𝐋𝐢𝐬𝐭𝐚𝐫 𝐚𝐥𝐮𝐧𝐨𝐬 </a>
        </div>
<?php 
    }
    include 'footer.php';
?>