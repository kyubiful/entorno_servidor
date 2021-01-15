<?php
  include 'hextorgb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
  <h2>Hexadecimal a RGB</h2>
  <?php
    if($_POST['hex'][0]=='#' && strlen($_POST['hex'])==7){
      $result=new hextorgb();
      $result->setHex($_POST['hex']);
      $rgb = $result->toRgb();
      echo '<p>'.$rgb.'</p>';
    } else {
      echo '<p>Valor hexadecimal incorrecto</p>';
    }
  ?>
</body>
</html>
