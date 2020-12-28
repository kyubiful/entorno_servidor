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
    print_r($equipos[0]);
    echo '<br>';
    print_r($equipos[1]);

    echo '<p>El equipo '.$equipos[0]['nombre'].' tiene '.$equipos[0]['numJugadores'].' jugadores y está en la posición '.$equipos[0]['posicionEnTabla'].'</p>';
    echo '<p>El equipo '.$equipos[1]['nombre'].' tiene '.$equipos[1]['numJugadores'].' jugadores y está en la posición '.$equipos[1]['posicionEnTabla'].'</p>';
  ?>
</body>
</html>
