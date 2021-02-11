<?php
  include_once 'dbNBA.php';
  $data=new Connect();
  $equipos=$data->getEquipos();
  $temporadas=$data->getTemporadas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Principal</title>
</head>
<body>
  <form action="filtrado.php" method="post">
    Equipo local
    <br/><br/>
    <select name="equipo1" id="">
      <?php foreach($equipos as $equipo){ ?>}
      <option value="<?php echo $equipo['equipo_local'] ?>"><?php echo $equipo['equipo_local'] ?></option>
      <?php } ?>
    </select>
    <br/><br/>
    Equipo visitante
    <br/><br/>
    <select name="equipo2" id="">
      <?php foreach($equipos as $equipo){ ?>}
      <option value="<?php echo $equipo['equipo_local'] ?>"><?php echo $equipo['equipo_local'] ?></option>
      <?php } ?>
    </select>
    <br/><br/>
    Temporada
    <br/><br/>
    <select name="temporada" id="">
      <?php foreach($temporadas as $temporada){ ?>}
      <option value="<?php echo $temporada['temporada'] ?>"><?php echo $temporada['temporada'] ?></option>
      <?php } ?>
    </select>
    <br/><br/>
    <input type="submit" value="FILTRAR">
  </form>	 
</body>
</html>