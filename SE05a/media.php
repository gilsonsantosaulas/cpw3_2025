<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
	$n3 = $_POST["n3"];
	$n4 = $_POST["n4"];
    $media = ($n1+$n2+$n3+$n4)/4;
    
?>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>Número 1</td>
			<td>Número 2</td>
			<td>Número 3</td>
			<td>Número 4</td>
			<td>Média</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $n1;?></td>
			<td><?php echo $n2;?></td>
			<td><?php echo $n3;?></td>
			<td><?php echo $n4;?></td>
			<td><?php echo $media;?></td>
		</tr>
	</tbody>
</table>


