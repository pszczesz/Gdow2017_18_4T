<!DOCTYPE html>
<html>
<head>
	<title>Ćwiczenie 2</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Typy liczbowe w php</h1>
<?php
	$a = 12;       //js: var a = 12;
    var_dump($a);   //js: typeof(a);
    echo "<br>";
    echo '<h3>Fajny nagłówek h3</h3>';
    echo 'Zmienna $a<br>';
    echo "Zmienna $a<br>";
    $b = 34.78;
    var_dump($b);
    echo '<p>'.$a.' + '.$b. ' = '.($a+$b).'</p>';
?>
<h3>Typ tekstowy</h3>
<?php
  $tekst = "ala ma kota";
  var_dump($tekst);
  echo '<br>'.$tekst[1].' długosć tekstu: '. strlen($tekst).'<br>';
  for($i=0;$i<strlen($tekst);$i++){
      echo $tekst[strlen($tekst)-1-$i];
  }
  echo '<br>';
  for($i=0;$i<strlen($tekst);$i++){
      echo $tekst[$i];
      if($i< strlen($tekst)-1 
              && $tekst[$i]!=' ' 
              && $tekst[$i+1]!=' ') echo '-';
  }
  $tekst2 = "   Ala ma kociaka   ";
  echo '<br>'.strlen($tekst2).'<br>';
  echo strlen(trim($tekst2)).'<br>';
  $long_text = 'ala ma kotka i ma tez jezyka';
  $find = 'ma';
  echo stripos($long_text, $find).'<br>';
?>
</body>
</html>