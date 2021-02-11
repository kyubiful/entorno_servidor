<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resumen</title>
</head>
<body>
  <?php include_once 'views/menu_view.php'; ?>	
  <h1>Resumen</h1>
  <?php foreach($resumen as $res){ ?>
  <h2>Título</h2>
  <p><?php echo $res['title'];?></p>
  <h2>Trama</h2>
  <p><?php echo $res['plot'];?></p>
  <h2>Creadores</h2>
  <p><?php echo $res['creators'];?></p>
  <h2>Primera Temporada</h2>
  <p><?php echo $res['season_start'];?></p>
  <h2>Última Temporada</h2>
  <p><?php echo $res['season_end'];?></p>
  <h2>Total Temporadas</h2>
  <p><?php echo $res['seasons'];?></p>
  <h2>Genero</h2>
  <p><?php echo $res['generes'];?></p>
  <?php } ?>
</body>
</html>
