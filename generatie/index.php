
<html>
<head>
  <meta charset="utf-8">
  <title>Age </title>
  <link href="stilul.css" rel="stylesheet">

</head>

<form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<h2>Bienvenido</h2> <br>
<h3> Și tu ai vârstă? ? </h3><br>
<input type="number" name="varsta">
<input type="submit" name="postsubmit" value="Ia vezi!!" class="button">
</form>

<div class="continutphp"><?php
echo '<link href="stilul.css" rel="stylesheet">';

  if (isset($_POST['postsubmit'])) {
      $varsta = $_POST['varsta'];
    echo "La acești minunați $varsta ani , faci parte din Generația";
}else {
    $varsta = 'Scrie-ți mai sus preafrumoasa vârstă pentru a afla din ce de generație faci parte..';
    echo "$varsta";

}

$alfa= 'Alpha ';
$z = 'Z';
$y = 'Y';
$x = 'X';
$boom = 'Baby Boomers';
$build = 'Builders' ;
$opas = 'Opa..';


if  ($varsta >= 1 && $varsta <= 7) {
  echo " $alfa";
}
  elseif ($varsta >=8 && $varsta <=21) {
    echo " $z";
}
  elseif ($varsta >=22 && $varsta <=36) {
  echo " $y";
}
  elseif ($varsta >=37 && $varsta <=51) {
    echo " $x";
}
  elseif ($varsta >=52 && $varsta <=70) {
    echo " $boom";
}
  elseif ($varsta >=71  && $varsta <=100) {
    echo " $build";
}
  elseif ($varsta >=101 && $varsta <=300) {
    echo '<script language="javascript" type="text/javascript">
                  alert("Nice try dead man.. Are you convinced that you r alive alive?! Think I have seen you before.. hmm .. Click OK, then you and I can confirm if You is really the still rocking You -!- ");
                  window.location = "alter.html";
          </script>';
}





?></div>
</html>
