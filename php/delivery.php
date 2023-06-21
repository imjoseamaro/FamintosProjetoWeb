<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - FamintOs</title>	

	<!--CSS-->
	<link rel="stylesheet" href="../css/cardapio.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--ICON-->
	<link rel="icon" href="../estetica_imgs/favicon.ico">
</head>

<body> 

<style>
	.rodape{
		bottom: 0;
        position: fixed;
		width: 100%;
	}
</style>

<?php
	include 'conexao.php';	
	include 'header.php';
?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">

				<form name="frmusuario" method="post" action="validaDelivery.php">  <!--Abrindo formulário-->
					<h2>Informações de Delivey</h2>

                    <div class="form-group">
						<label for="nome">Seu nome ou de quem vai receber</label>
						<input name="nome_Delivery" type="text" class="form-control" required="required" placeholder="">
					</div>
					
					<div class="form-group">
						<label for="rua">Rua</label>
						<input name="rua_Delivery" type="text" class="form-control" required="required" placeholder="">
					</div>

                    <div class="form-group">
						<label for="bairro">Bairro</label>
						<input name="bairro_Delivery" type="text" class="form-control" required="required" placeholder="">
					</div>

                    <div class="form-group">
						<label for="numero">Número da casa</label>
						<input name="numero_Delivery" type="number" class="form-control" required="required" placeholder="">
					</div>

                    <div class="form-group">
						<label for="cidade">Cidade</label>
						<input name="cidade_Delivery" type="text" class="form-control" required="required" placeholder="">
					</div>

                    <div class="form-group">
						<label for="estado">Estado</label>
						<input name="estado_Delivery" type="text" class="form-control" required="required" placeholder="">
					</div>
							
					<button type="submit" class="btn btn-lg btn-default">
						<span class="glyphicon glyphicon-ok"> Confirmar</span>
					</button>
					</form> <!--Fechando formulário-->


			</div>
		</div>
	</div>
	
	<?php include 'footer.php' ?>


	</body>
	</html>
	
	