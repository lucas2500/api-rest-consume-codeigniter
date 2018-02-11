<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Consumindo api rest</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- javascript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="text-center my-4">
			<h3>Consumindo api rest</h3>
			<form action="<?php echo base_url();?>welcome/editarRegistro" method="post">
				<div class="form-group my-4">
					<input type="text" name="nome" id="campo1" placeholder="Nome" class="form-control" value="<?php echo $dados->nome; ?>" required="">
				</div>

				<div class="form-group my-4">
					<input type="text" name="idade" placeholder="Idade" class="form-control"  value="<?php echo $dados->idade; ?>" required="">
				</div>

				<div class="form-group my-4">
					<input type="text" name="cargo" placeholder="Cargo" class="form-control"  value="<?php echo $dados->cargo; ?>" required="">
				</div>
				<input type="hidden" name="ID" value="<?php echo $dados->ID; ?>">
				<div class="text-right"><button class="btn btn-primary">Atualizar registro</button></div>
			</form>
		</div>
	</div>
</body>
</html>