<?php include 'conexion.php';

$id = $_REQUEST['idenviar'];
$del = $con -> query("DELETE FROM alumnos WHERE idalumno='$id' ");
if ($del) {
    echo "<script>
    location.href='recibirDatos.php';
    </script>";
}else{
    echo "<script>
    alert('No se pudo eliminar bro xc');
    location.href='recibirDatos.php';
    </script>";
}
?>
