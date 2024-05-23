<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curso de PHP - CursoemVideo.com</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div>
		<form action="resultado.php" method="get">
			Número: <select name="num" id="num">
				<?php
					$i = 1;
					while ($i <= 10) {
						echo "<option value='$i'>$i</option>";
						$i++;
					}
				?>
			</select>
            <p><input type="submit" value="Tabuada" class="botao"></p>
		</form>
	</div>
</body>
</html>