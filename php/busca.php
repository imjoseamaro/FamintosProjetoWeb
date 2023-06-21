<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Inteligente</title>
    
    <!--CSS-->
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="stylesheet" href="../css/cabecalhocardapio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <!--ICON-->
    <link rel="icon" href="../estetica_imgs/favicon.ico">    
</head>
<body>

<?php
        session_start();

        include 'conexao.php';	
        include 'header.php';

        $pesquisa = $_GET['txtBuscar'];
        $consulta = $cn->query("select * from tbl_comidas where nm_comida like concat ('%','$pesquisa','%')");
        
?>

<main id="bloco-principal">
    <h1 id="titulo-cardapio">Cardápio inteligente</h1>

    <nav class="links-secoes">
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=lanches" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/lanches.png">Lanches</a>
        </li>
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=bebidas" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/bebidas.png">Bebidas</a>
        </li>
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=sobremesas" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/sobremesas.png">Sobremesas</a>
        </li>
    </nav>
    <nav class="links-secoes">
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=sorveteria" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/sorveteria.png">Sorveteria</a>
        </li>
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=aperitivos" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/aperitivos.png">Aperitivos</a>
        </li>
        <li class="secao">
            <form role="search" name="frmpesquisa" method="get" action="busca.php">
                <img src="../estetica_imgs/botaopesquisa.png" id="btnBusca" alt="Buscar"/>
                <input type="text" id="txtBusca" placeholder="Buscar..." name="txtBuscar"/>
            </form>
        </li>
    </div>

<?php 
    include 'footer.php';
?> 

</body>
</html>