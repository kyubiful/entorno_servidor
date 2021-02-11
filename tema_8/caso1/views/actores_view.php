<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cast</title>
</head>
<body>
  <?php include_once 'views/menu_view.php' ?>	
  <h1>Actores</h1>
  <table>
    <tr>
      <th>Actor</th>
      <th>Nombre serie</th>
      <th>Descripcion</th>
      <th>Temporada inicial</th>
      <th>Ultima temporada</th>
      <th>Episodios</th>
    </tr>
    <?php foreach($cast as $actor){ ?>    
    <tr>
      <td><?php echo $actor['name'] ?></td>
      <td><?php echo $actor['serie_name'] ?></td>
      <td><?php echo $actor['full_desc'] ?></td>
      <td><?php echo $actor['season_start'] ?></td>
      <td><?php echo $actor['season_end'] ?></td>
      <td><?php echo $actor['episodes'] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
