<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Episodios</title>
</head>
<body>
  <?php include_once 'views/menu_view.php'; ?>
  <form action="" method="post">
    Elige el número del episodio: 
    <input type="number" name="number" id="">
    <input type="submit" value="Enviar">
  </form>
  <h1>Resultado</h1>
  <?php if($actores){ ?>
  <table>
    <tr>
    	<th>Nombre</th>
    	<th>Personaje</th>
    	<th>Episodio</th>
    	<th>Temporada</th>
    </tr>
    <?php foreach($actores as $actor){ ?>
    <tr>
	<td><?php echo $actor['name']; ?></td>
	<td><?php echo $actor['serie_name']; ?></td>
	<td><?php echo $actor['episode']; ?></td>
	<td><?php echo $actor['season']; ?></td>
    </tr>
    <?php } ?>
  </table>
  <?php } ?>
</body>
</html>
