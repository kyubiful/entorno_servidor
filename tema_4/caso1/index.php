<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	  table{
	    border: 1px solid;
	    margin-bottom: 10px;
	  }
	  td{
	    border: 1px solid;
	  }
	</style>
</head>
<body>
  <?php
    $tablas=['primera'=>5,'segunda'=>13,'tercera'=>11];

    foreach ($tablas as $tabla){
      echo '<table>';
      echo '<tr><td> Tabla del '.$tabla.'</td></tr>';
      for ($i=1; $i<=10;$i++){
	echo '<tr><td>'.$tabla.'x'.$i.'='.($tabla*$i).'</td></tr>';
      }
      echo '</table>';
    }
  ?>	
</body>
</html>
