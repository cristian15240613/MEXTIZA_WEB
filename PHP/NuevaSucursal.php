<?php

include_once('Conexion.php');
$conection=conectar();
//session_start();
//$idUsr = $_SESSION['ID'];
$idUsr = 7;

if (!$conection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

    if(isset($_POST['nombre'])     && !empty($_POST['nombre'])     &&
       isset($_POST['telefono'])    && !empty($_POST['telefono'])    &&
       isset($_POST['direccion'])      && !empty($_POST['direccion']) && 
       isset($_POST['descripcion'])      && !empty($_POST['descripcion']) && 
       isset($_FILES['imagen'])      && !empty($_FILES['imagen'])  
       ){
    
$nombre = $_POST['nombre'];
$telefono =$_POST['telefono'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        

$query = "INSERT INTO SUCURSAL(TELEFONO,NOMBRE,DIRECCION,DESCRIPCION,ID_USUARIO,ESTATUS_SUCURSAL,IMAGEN) VALUES('$telefono','$nombre','$direccion','$descripcion','$idUsr',1,'$imagen')";
        
        
        
    mysqli_query($conection,$query) or die(mysqli_error($conection));
     echo("todo bien");
        
    }
   
    mysqli_close($conection);  

?>