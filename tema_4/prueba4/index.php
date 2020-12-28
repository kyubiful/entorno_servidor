
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
  <?php
    $equipos=[];
    $equipos[]=['nombre'=>'Team1','numJugadores'=>11,'posicionEnTabla'=>2];
    $equipos[]=['nombre'=>'Team2','numJugadores'=>15,'posicionEnTabla'=>1];

    foreach ($equipos as $equipo){
      echo '<p>El equipo '.$equipo['nombre'].' tiene '.$equipo['numJugadores'].' jugadores y está en la posición '.$equipo['posicionEnTabla'].'</p>';
    }
  ?>
</body>
</html>
