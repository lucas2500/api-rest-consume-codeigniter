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
			<h4 class="text-left" style="color: #3CB371"><?php echo $msg; ?></h4>
			<form action="<?php echo base_url();?>welcome/insertDados" method="post">
				<div class="form-group my-4">
					<input type="text" name="nome" id="campo1" placeholder="Nome" class="form-control" required="">
				</div>

				<div class="form-group my-4">
					<input type="text" name="idade" placeholder="Idade" class="form-control">
				</div>

				<div class="form-group my-4">
					<input type="text" name="cargo" placeholder="Cargo" class="form-control">
				</div>
				<div class="text-right"><button class="btn btn-primary">Inserir</button></div>
			</form>
		</div>
	</div>

	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Idade</th>
					<th>Cargo</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>

			<tbody>
				<?php
				if(!empty($dados)){ 
					$cont=0;
					foreach($dados as $DD){
						echo "<tr>";
						echo "<td>".$DD->nome."</td>";
						echo "<td>".$DD->idade."</td>";
						echo "<td>".$DD->cargo."</td>";
						echo "<td><a href='/welcome/editarUser/".$DD->ID."'<button class='btn btn-primary'>Ir</button></a></td>";
						echo "<td><a href='/welcome/deletar/".$DD->ID."' <button class='btn btn-danger' onclick='return excluirFunc()'>Ir</button></a></td>";
						echo "</tr>";

						$cont++;			
					}
				}
				?>
			</tbody>
		</table>
		<div class="text-left">Total de funcionários: <strong><?php echo $cont; ?></strong></div>
	</div>

	<script type="text/javascript">
		
		function excluirFunc(){

			var r = confirm("Deseja mesmo excluir este funcionário?");

			if(r){

				return r;

			} else{

				return false;
			}

		}
	</script>
</body>
</html>