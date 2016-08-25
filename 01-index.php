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
        echo "<br/>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }
        echo "<br/>";
        for($j = 10;$j > 0;$j--){
            echo "$j ";
        }
        echo "<br/>";
        for($l = 0;$l <= 50;$l+=5){
            echo "$l ";
            if($l%50 == 0){
                echo "<br/>";
            }
        }
        for($m = 20;$m >= 0;$m -= 2){
            print "$m ";
        }
    ?>
</div>
</body>
</html>
 