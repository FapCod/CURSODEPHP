<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$ins= $con -> query("INSERT INTO alumnos(idalumno,nombre,apellidoPaterno,apellidoMaterno) VALUES('','$nombre','$paterno','$materno')");
if ($ins) {
     echo "<script>
     location.href='recibirDatos.php';
     </script>";
}else {
    echo "<script>
    alert('No se pudo guardar bro xc');
    location.href='recibirDatos.php';
    </script>";
}

?>