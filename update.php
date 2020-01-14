<?php include 'conexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$up = $con -> query("UPDATE alumnos SET nombre='$nombre', apellidoPaterno='$paterno', apellidoMaterno='$materno' WHERE idalumno='$id' ");
if ($up) {
    echo "<script>
    location.href='recibirDatos.php';
    </script>";
}else{
    echo "<script>
    location.href='actualizar.php?idenviar=".id."';
    </script>";
}
?>