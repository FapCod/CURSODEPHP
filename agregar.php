<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="guardar.php" method="POST">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="paterno" placeholder="apellido paterno"><br/>
    <input type="text" name="materno" placeholder="apelllido materno"><br/>
    <button>Guardar</button>
    </form>
</body>
</html>


