<?php

session_start();

include 'conexion.php';
// Conectar a la base de datos
//$_POST['id'] = 12345;
$_SESSION['usuario'] = 'admin';

if (isset($_POST['id']) && isset($_SESSION['usuario'])) {
    $usuario = $_SESSION["usuario"];
    $id = $_POST['id'];
    

        $query = "SELECT Profesores.Saldo
            FROM Profesores
            WHERE 
                  Profesores.idProfesores = $id ";

        //echo $query;
        $resultado = mysql_query($query) or die(mysql_error());

        $row2 = mysql_fetch_assoc($resultado);
        echo json_encode($row2);
    
}
?>
