<?php
require_once "views/Inicio.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="container content">	
			<h2><?php echo $data["titulo"]; ?></h2>			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=especialidades&a=actualizar" autocomplete="off">

				<input type="hidden" id="id_especialidad" name="id_especialidad" value="<?php echo $data["id_especialidad"]; ?>" />

				<div class="form-group mb-3">
					<label for="nombre_especialidad">Nombre</label>
					<input type="text" class="form-control" id="nombre_especialidad" name="nombre_especialidad" value="<?php echo $data["especialidades"]["nombre_especialidad"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>
				
			</form>
		</body>
	</html>		