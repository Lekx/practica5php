<!DOCTYPE html>
<html>
	<head>
		<title>Practica # 5</title>
		<style>
		.ambas
		{
			color:#EE3106;
			font-size:18px;
			font-weight:bold;
		}
		
		.par
		{
			background-color:#B9EABE;
		}
		
		.impar
		{
			background-color:#B9D0EA;
		}
	</style>

	</head>
	<body>
		<table border="1" cellspacing="0" cellpadding="10">
			<?php
			$c=1;
				for($a = 1; $a <=10; $a++)
				{
					echo "<tr class='ambas ".($a%2 != 0 ? "par" : "impar")."'>";
					for($b = 1; $b <=10; $b++)
					{
						echo "<td >".($c++)."</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
