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
			$nota1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
			$nota2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
			$media = ($nota1 + $nota2) / 2;

			if ($media < 5) {
				$resultado = "<span class='foco'>REPROVADO</span>";
			} elseif (($media >= 5) && ($media < 7)) {
				$resultado = "<span class='foco'>EM RECUPERAÇÃO</span>";
			} else {
				$resultado = "<span class='foco'>APROVADO</span>";
			}

			echo "A média entre <span class='foco'>$nota1</span> e <span class='foco'>$nota2</span> é igual a <span class='foco'>". number_format($media, 2) . "</span>.<br>";
			echo "Situação do aluno: $resultado.<br><br	>"
        ?>
		<span class="botao">
			<a href="exercicio03.html">Voltar</a>
		</span>
    </div>
</body>
</html>