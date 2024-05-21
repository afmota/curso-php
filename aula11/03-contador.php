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
        <?php
			$start = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
			$end = isset($_GET["fim"]) ? $_GET["fim"] : 100;
			$step = isset($_GET["salto"]) ? $_GET["salto"] : 0;

			$dif = abs($end - $start);
			if ($dif < $step) {
				echo "A diferença entre INÍCIO e FIM não pode ser menor que o INCREMENTO. <br><br>";
				echo "<span class='botao'>
					<a href='03-contador.html'>Voltar</a>
				</span>";
			}

			if ($start < $end) {
				while ($start <= $end) {
					echo $start . '  ';
					$start += $step;
				}
			}

			if ($start > $end) {
				while ($start >= $end) {
					echo $start . '  ';
					$start -= $step;
				}
			}
        ?>
    </div>
</body>
</html>