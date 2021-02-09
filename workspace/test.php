<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
  <div>
    <?php
      for ($i=1;$i<4;$i++){
    ?>
    <h1>Esto es un titulo <?php echo $i ?></h1>
    <?php
      };
    ?>
  </div>	
</body>
</html>
