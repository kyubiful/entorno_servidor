<?php
  include_once 'dbNBA.php';
  $data=new Connect();
  $equipos=$_POST;
  $partidos=$data->getPartidosPorEquipos($equipos['equipo1'], $equipos['equipo2'], $equipos['temporada']);
  include_once 'index.php';
?>
<?php if($equipos){ ?>
   <h1>Resultado</h1>
   <table>
    <tr>
    	<th>Local</th>
    	<th>Visitante</th>
    	<th>Puntos Local</th>
    	<th>Puntos Visitante</th>
    	<th>Temporada</th>
    </tr>
    <?php foreach($partidos as $partido){ ?>
    <tr>
      <td><?php echo $partido['equipo_local'] ?></td>
      <td><?php echo $partido['equipo_visitante'] ?></td>
      <td><?php echo $partido['puntos_local'] ?></td>
      <td><?php echo $partido['puntos_visitante'] ?></td>
      <td><?php echo $partido['temporada'] ?></td>
    </tr>
    <?php } ?>
  </table>
<?php } ?>
