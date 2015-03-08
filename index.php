<?php
	require_once("core/core.php");
	$error=0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Loja Mimelo | Camisetas Personalizadas</title>
<link rel="icon" type="image/png" href="img/favicon.png">

	<link rel="stylesheet" href="css/bootstrap.min.css"></link>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/custom.css"></link>


</head>
<body>

<?php 
	require_once("sdk/analyticstracking.php");
	require_once('sdk/facebook.php'); 
	require_once('core/functions.php');


		if(isset($_POST['submit']))
		{
		   $error=check_double($_POST["email"]);
		} 

?>

<div class="container-fluid">
	<div class="col-md-12 text-center"
		<div class="row-fluid">
			<div class="col-md-4 col-md-offset-4">
				<?php echo('<a href='.url.'><img src="img/logo.png" class="img-responsive center-block"></a>');?>
			</div>
	</div>
		<div class="row-fluid">
			<div class="col-md-4 col-md-offset-4 text-center">
				<h2>Estamos surgindo!</h2>
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-md-4 col-md-offset-4">
				<p>Ainda estamos preparando nosso cantinho, mas pode ficar tranquilo que avisaremos quando estivermos com tudo pronto! Só nao esqueça de cadastrar seu email abaixo! No nosso lançamento estaremos liberando um cupom de <b>10%</b> de desconto para os registrados na sua primeira compra!</p>
			</div>
		</div>

		<div class="row-fluid">
			<div class="col-md-4 col-md-offset-4">

			</div>

		<div class="row-fluid">

		<?php if($error==2){?>
			<div class="col-md-4 col-md-offset-4 text-center">
				<div class="alert alert-danger" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Erro:</span>
					  Esse email já foi utilizado!
				</div>
			</div>
			<?php }?>

		<?php if($error==1){?>
			<div class="col-md-4 col-md-offset-4 text-center">
				<div class="alert alert-success" role="alert">
					  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					  <span class="sr-only">Parabéns!</span>
					  Cadastro efetuado com sucesso!
				</div>
			</div>
		<?php }?>

			<div class="col-md-4 col-md-offset-4 text-center">
				<form class="form-horizontal" method="POST" action="index.php">
					<fieldset>
						<div class="form-group row">
							<div class="col-md-10">
								<input id="email" name="email" placeholder="Seja o primeiro a saber!" class="form-control input-md" type="email" required="true">
							</div>
							<div class="col-md-2">
								<button type="submit" id="button1id" name="submit" class="btn btn-primary">Cadastrar</button>
							</div>
						</div>
					</fieldset>
				</form>
		</div>
	</div>	
	<div class="row-fluid">
		<div class="col-md-4 col-md-offset-4 text-center">
			<div class="fb-like-box fb" data-href="https://www.facebook.com/mimelocamisetas" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
		</div>
	</div>
</div>
</div>
<footer class="footer">
	<div class="container text-center">
		<p class="text-muted footer-text">Desenvolvivo por <a href="http://www.pauloxavier.com">Paulo Xavier.</a></p>
	</div>
</footer>
</body>
</html>
