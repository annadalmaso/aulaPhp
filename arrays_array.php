<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Arrays of Arrays in PHP</title>
	<style type ="text/css">
	body,td,tr{
		border : 1px solid black;
		padding: 8px;
	}
	</style>
</head>
<body>
	<h2>Tipos de dados compostos</h2>
	<?php
	
	$pessoa = array();
	
	$pessoa[] = [
	'nome' => 'Fulano',
	'cpf' => '123123123',
	'telefone' => '45 00000-0000'
	];
	
	$pessoa[] = [
	'nome' => 'Ciclano',
	'cpf' => '1234567689',
	'telefone' => '45 02200-0000'
	];
	
	$pessoa[] = [
	'nome' => 'Beltrano',
	'cpf' => '12341234123',
	'telefone' => '45 03300-0000'
	];
	
	//echo $pessoa[2]['telefone']; //responsavel por apresentar antes o telefone da 2 pessoa
		
	//echo '<pre>'; 
	//print_r($pessoa);
	//echo '</pre>';
	foreach($pessoa as $pes){
		echo '<ul><li>'.$pes['nome'].' / CPF:  '.$pes['cpf'].' / Telefone: '.$pes['telefone'].'</li></ul></br>';
	}
	?>
	<table>
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>CPF</td>
			<td>Telefone</td>
		</tr>
		
	<?PHP foreach($pessoa as $id => $pes): ?>
		<tr>
			<td><?=$id ?></td>
			<td><?=$pes['nome']?></td>
			<td><?=$pes['cpf']?></td>
			<td><?=$pes['telefone']?></td>
			<td><a href="#"
			onclick = "returnr confirm("deseja excluir?)"</td>
		</tr>
	

	
	</table>
	<?PHP endforeach; ?>
	
</body>
</html>
