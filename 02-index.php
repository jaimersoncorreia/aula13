<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02-tabuada.php">
        <select name="numero">
            <?php
                for($numero = 1;$numero <= 10;$numero++){
                    print "<option>$numero</option>";
                }
            ?>
            </select>
        <input type="submit" class="botao" value="Tabuada"/>
    </form>
    <?php
        
    ?>
</div>
</body>
</html>
 