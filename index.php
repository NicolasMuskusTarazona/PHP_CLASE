<?php
$nombre = "Nicolas";
$apellido = "Muskus";
$skills = ["git","Mysql","php"];
$contrasena_usuario = "admin";
$es_valida = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Welcome to PHP</title>
</head>
<body>
    <h1><?php echo "Hola"; ?> Camper </h1>
    <h2><?php echo $nombre; echo " "; echo $apellido; ?></h2>
    <h2>Skills:</h2>
    <ul>
        <li><?php echo"Git";?></li>
        <li><?php echo"PHP";?></li>
        <li><?php echo"MySQL";?></li>
        <li><?php printf("Skill nivel 1: %s", $skills[0]);?></li>
    </ul>
</body>
</html>