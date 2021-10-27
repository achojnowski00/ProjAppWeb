<?php
 $nr_indeksu = '155624';
 $nrGrupy = 'ISI4';
 echo "Aleksander Chojnowski $nr_indeksu grupa $nrGrupy <br/><br/>";

 include 'variables.php';

 echo "Za pomoca metidy include, moje imie to $name a moje hobby to $hobby <br><br>";


if (5 > 3)
  echo "5 jest większe od 3<br><br>";
else
  echo "to sie nie wywoła nigdy bo 5 > 3<br><br>";

$i = 1;

switch ($i) {
  case 0:
    echo "Zmienna i równa się 0<br><br>";
    break;
  case 1:
    echo "Zmienna i równa się 1<br><br>";
    break;
  case 2:
    echo "Zmienna i równa się 2<br><br>";
    break;
  }


$i = 1;
echo "odliczanie do 10 za pomocą pętli while<br>";
while ($i <= 10):
  echo "$i<br>";
  $i++;
endwhile;
echo "<br>";

echo "odliczanie do 10 za pomocą pętli for<br>";
for ($i = 1; $i <= 10; $i++) {
  echo "$i<br>";
}
echo "<br>";


echo "<br/>Metoda GET do poprawnego dzialania potrzebuje aby w linku umiescic .../?name=Alex<br/>";
echo 'Witaj ' . htmlspecialchars($_GET["name"]) . '!';


session_start();
$_SESSION["newsession"]='fsdsfd';
echo '</br>';
echo $_SESSION["newsession"];
echo '</br>';

echo 'Witaj ' . htmlspecialchars($_POST["name"]) . '!';

?>