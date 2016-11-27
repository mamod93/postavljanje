<html>
<head>
  <title> Php varijable 2 </title>
</head>
<body>
  <h1>Prosirivanje promjenljivih i kreiranje promjenljivih promjenljivih</h1>
  <?php
  define ("pi", 3.142344);
  $rijec="nov";
echo "data rijec je {$rijec}ine <br>";//prosirivanje promjenljivih

/*promjenljive promjenoljivih*/

$jabuka=2;
$kruska=3;
$voce="jabuka";
echo "vrijednost jabuke preko voca je ${$voce} <br>";
$voce="kruska";
echo "vrijednost jabuke preko voca je ${$voce} <br>";
//konstanta se pise bez navodjenja $
echo "vrijednost konstante je ", pi,  "<br>";
  ?>
  <img src="php-power-white.gif">
</body>
</html>
