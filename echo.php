<html>
<head>
  <title> Php i html zajedno </title>
</head>
<body>
  <h1>Tekst koji slijedi je iz php-a</h1>
  <?php
  echo "Ovo je izpisano, \"iz phpa\"";
  ?>
  <h1>Tekst koji slijedi je takodje iz php-a</h1>
  <?php
  echo "Ovo je izpisano iz phpa 2 put";
echo "<br>";
echo <<<END
Ovo je sve napisano pomocu opcije za stampanje END, koja se dodaje poslje naredbe
echo i na kraju navedenog teksta navodi se opet opcija END.
END; /*ispis opcije END*/
  ?>
<br>
<br>
  <img src="php-power-white.gif">
</body>
</html>






</html>
