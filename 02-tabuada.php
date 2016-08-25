<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $numero = isset($_GET["numero"])?$_GET["numero"]:1;
        print "Tabuada do <span class='foco'>$numero</span> <br/>";
        for($contador = 1;$contador <= 10;$contador++){
            echo "$contador x $numero = ".($contador*$numero)."<br/>";
        }
        ?>  <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 