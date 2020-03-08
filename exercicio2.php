<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Arrays in PHP</title>
</head>
<body>
	<h2>Tipos de dados compostos</h2>
	<?php
		$cat = [
			['id' => 1, 'nome' => "Cat A"],
			['id' => 2, 'nome' => "Cat B"],
			['id' => 3, 'nome' => "Cat C"],
			['id' => 4, 'nome' => "Cat D"],
		];

		foreach ($cat as $key => $value) {
			echo "<label><input type='checkbox' name='categoria[]' value='{$value['id']}' > {$value['nome']}</label>";
		}
	?>
</body>
</html>
