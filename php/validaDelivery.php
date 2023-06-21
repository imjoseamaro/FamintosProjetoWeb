<?php 
    include 'conexao.php';

    session_start();
    $data = date('Y-m-d');  // variavel que vai pegar a data do dia (ano mes dia -padrão do mysql)
    $ticket = uniqid();  // gerando um ticket com função uniqid(); 	gera um id unico 
    $cd_user = $_SESSION['ID'];  //recebendo o codigo do usuário logado, nesta pagina o usuario ja esta logado pois, em do carrinho de compra  
    $Vnome = $_POST['nome_Delivery']; 
    $Vrua = $_POST['rua_Delivery'];
    $Vbairro = $_POST['bairro_Delivery'];
    $Vnumero = $_POST['numero_Delivery'];
    $Vcidade = $_POST['cidade_Delivery'];
    $Vestado = $_POST['estado_Delivery'];

    foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
        $consulta = $cn->query("SELECT vl_preco FROM tbl_comidas WHERE cd_comida='$cd'");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        $preco = $exibe['vl_preco'];

    $incluir = $cn->query("INSERT INTO tbl_venda(nome_cliente,rua,bairro,numero,cidade,estado, no_Ticket,cd_cliente,cd_comida,qt_comida,vl_item,dt_venda,opcao) VALUES
        ('$Vnome','$Vrua','$Vbairro','$Vnumero','$Vcidade','$Vestado', '$ticket','$cd_user','$cd','$qnt','$preco','$data','Delivery')
    ");
    }

    include "fim.php";
?>