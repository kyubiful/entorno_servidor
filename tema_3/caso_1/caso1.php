<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Caso 1</title>
  </head>
  <body>
  <style>
    table{
      border: 0.5px solid black;
      width: 400px;
      border-spacing: 0px;
    }
    th, td{
      width: 200px;
      text-align: left;
      border: 0.5px solid black;
      border-collapse: collapse;
      padding: 2px;
    }
    .title{ 
      background-color: #6ff6ff;
      margin: 0px;
    }
  </style>
  <?php 
    $cont=1;
  ?>
    <table>
      <tr>
	<th class='title'>Cardinal</td>
	<th class='title'>Ordinal</td>
      </tr>
      <?php while($cont<=10): ?>
      <tr>
	<td><?php echo $cont; ?></td>
	<td>
	  <?php
	    switch ($cont){
	      case 1:
		echo 'Primero';
		break;
	      case 2:
		echo 'Segundo';
		break;
	      case 3:
		echo 'Tercero';
		break;
	      case 4:
		echo 'Cuarto';
		break;
	      case 5:
		echo 'Quinto';
		break;
	      case 6:
		echo 'Sexto';
		break;
	      case 7:
		echo 'Séptimo';
		break;
	      case 8:
		echo 'Octavo';
		break;
	      case 9:
		echo 'Noveno';
		break;
	      case 10:
		echo 'Décimo';
		break;
	    }
	  ?>
	</td>
      </tr>
      <?php
	$cont++;
	endWhile;
      ?>
    </table>
  </body>
</html>
