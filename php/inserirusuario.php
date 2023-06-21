<?php 
    include 'conexao.php';

    $nome = $_POST['nome_cad'];
    $email = $_POST['email_cad']; //pega o que foi escrito no formulario
    $senha = $_POST['senha_cad'];

    $consulta = $cn->query("select ds_email from tbl_usuario where ds_email = '$email'"); //valida o email
    $exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

    if($consulta->rowCount() == 1) {
        header('location:erro1.php'); // se já tiver 1 email, envia a pagina erro1
    }else{
        $incluir = $cn->query("
        insert into tbl_usuario(nm_usuario,ds_email,ds_senha)  
        values('$nome','$email','$senha')"); // se não tiver, insere no banco de dados
        header('location:ok.php');
    }  
?>