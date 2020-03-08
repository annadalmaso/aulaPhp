<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Arrays in PHP</title>
</head>
<body>
	<h2>Tipos de dados compostos</h2>
	<?php
	//$arr = array(1, 4, 5, 6 ,7);
	//$arr = array();
	//$arr[] = 1;
	//$arr[] = 4;
	
	//echo '<pre>';
	//print_r($arr);
	//echo '</pre>;
	
	//$arr = array(
	//'nome1' => 'fulano',
	//'nome2' => 'ciclano',
	//	'nome3' => 'beltrano');
	
//	echo $arr['nome3'];  
	
	//echo '<pre>';
	//print_r($arr);
	//echo '</pre>';

		$arr = [];
		$arr[] = 1;
		$arr[] = 4;
		$arr[] = 5;
		$arr[] = 7;
$arr[] = 7;
		
		for($i=0; $i< count($arr); $i++){
			echo 'Posição: ['.$i.'] </br>';
			'Valor: '.$arr[$i].'</br>';
		}
		
		foreach($arr as $c => $a){
			echo 'Posição: ['.$c.'] - '.'Valor: '.$a.'</br>';
		}
		
	?>
</body>
</html>
