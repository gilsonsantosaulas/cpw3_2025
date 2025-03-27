<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
<?php
    $horas_normais = $_POST["horas_normais"];
    $horas_extras = $_POST["horas_extras"];
    $salario = ($horas_normais*10)+($horas_extras*15);
    
?>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>Horas Normais</td>
			<td>Horas Extras</td>
			<td>Salário</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $horas_normais;?></td>
			<td><?php echo $horas_extras;?></td>
			<td><?php echo $salario;?></td>
		</tr>
	</tbody>
</table>


