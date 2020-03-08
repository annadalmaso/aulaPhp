
<html>
<head>
    <title>Aula 01</title>
    <style type="text/css">
	p{
		color: blue;
	}
    </style>
    <script type="text/javascript">
		function fun(){
			alert("teste");
		}
    </script>
</head>
<body>
    <h2>Teste</h2>
    <p>Paragrafo</p>
    <table>
		<?php for($i =1; $i<=10; $i++){?>
			<tr>
				<?php for($i=1; $i<=10; $i++){ ?>
				<td><?php echo(10*($i-1))+$j;?></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>'
   
    
</body>
</html>

