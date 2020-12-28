<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
  <?php
    $juan=['altura'=>175,'pelo'=>'rubio','ojos'=>'azules'];
    $maria=['altura'=>168,'pelo'=>'castaña','ojos'=>'marrones'];
    $pedro=['altura'=>180,'pelo'=>'castaño','ojos'=>'verdes'];

    echo '<p>La altura de Juan es: '.$juan['altura'].'</p>';
    echo '<p>Los ojos de Maria son: '.$maria['ojos'].'</p>';
    echo '<p>El pelo de Pedro es: '.$pedro['pelo'].'</p>';
  ?>
</body>
</html>
