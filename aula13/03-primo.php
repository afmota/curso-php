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
            $n = isset($_GET["num"]) ? $_GET["num"] : 1;
            $m = '';
            $cm = 0;

            echo "Analisando o número $n" . '<br><br>';

            for ($c = 1; $c <= $n; $c++) {
                if ($n % $c == 0) {
                    $m .= $c . ' ';
                    $cm++;
                }
            }
            echo "Valores múltiplos: $m <br><br>";
            echo "Total de múltiplos: $cm <br><br>";

            if ($cm > 2) {
                echo "Resultado: $n <strong class='foco'>NÃO É PRIMO!</strong>";
            } else {
                echo "Resultado: $n <strong class='foco'>É PRIMO!</strong>";
            }
        ?>
    </div>
</body>
</html>