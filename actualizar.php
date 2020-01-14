<?php include 'conexion.php';

$id = $_REQUEST['idenviar'];
$sele= $con -> query("SELECT * FROM alumnos WHERE idalumno='$id'");
if ($a = $sele -> fetch_assoc()) {
   

}
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
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" name="nombre" placeholder="nombre" value="<?php echo $a['nombre'] ?>"> <br/>
    <input type="text" name="paterno" placeholder="apellido paterno" value="<?php echo $a['apellidoPaterno'] ?>"><br/>
    <input type="text" name="materno" placeholder="apelllido materno" value="<?php echo $a['apellidoMaterno'] ?>"><br/>
    <button>Actualizar</button>

    </form>

</body>
</html>

