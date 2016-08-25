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
        $resposta = 0;
        $valoresmultiplos = "";
        echo "Analisando o número $numero...<br/>";
        for($i = 1;$i <= $numero;$i++){
            if($numero%$i == 0){
                $resposta += 1;
                $valoresmultiplos .= " $i"; 
            }           
        }
        echo "Valores múltiplos: $valoresmultiplos <br/>";
        echo "Total de múltiplos: $resposta<br/>";
        echo "O número $numero é <span class='foco'>".(($resposta == 2)?"É PRIMO!":"NÃO É PRIMO!")."</span><br/>";
        
        ?>  <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 