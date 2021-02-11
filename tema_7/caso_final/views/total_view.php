<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav>
    <?php include_once 'views/menu_view.php'; ?>
  </nav>
  <p>Gastos semana 1: <?php echo $gastosOne[0]['suma']; ?></p>
  <p>Gastos semana 2: <?php echo $gastosTwo[0]['suma']; ?></p>
  <p>Ventas semana 1: <?php echo $ventasOne[0]['suma']; ?></p>
  <p>Ventas semana 2: <?php echo $ventasTwo[0]['suma']; ?></p>
</body>
</html>
