<?php include 'conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<th>Id</th>
<th>NOMBRE</th>
<th>APELLIDO PATERNO</th>
<th>APELLIDO MATERNO</th>
<td></td>
<?php 
$sele= $con -> query("SELECT * FROM alumnos");
while ($a = $sele -> fetch_assoc()) {
    ?>
    <tr>
    <td><?php echo $a['idalumno'] ?></td>
    <td><?php echo $a['nombre'] ?></td>
    <td><?php echo $a['apellidoPaterno'] ?></td>
    <td><?php echo $a['apellidoMaterno'] ?></td>
    <td><a href="actualizar.php?idenviar=<?php echo $a['idalumno'] ?>">Editar</a></td>
    <td><a href="eliminar.php?idenviar=<?php echo $a['idalumno'] ?>">Eliminar</a></td>
    </tr>
<?php } ?>
</table>
<a href="agregar.php"><input type="button" value="AGREGAR"></a>
</body>
</html>

