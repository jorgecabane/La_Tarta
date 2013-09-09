<?php

session_start();

include 'conexion.php';
// Conectar a la base de datos
//$_POST['id'] = 12345;
$_SESSION['usuario'] = 'admin';

if (isset($_POST['id']) && isset($_SESSION['usuario'])) {
    $usuario = $_SESSION["usuario"];
    $id = $_POST['id'];
    if (is_numeric($id)) {

        $query = "SELECT Insumos.Codigo, Insumos.nombre, Insumos.precio
            FROM Insumos
            WHERE Insumos.Codigo = '$id' ";

        //echo $query;
        $resultado = mysql_query($query) or die(mysql_error());

        if ($resultado) {
            $row2 = mysql_fetch_assoc($resultado);
            echo json_encode($row2);
        } else {
            echo 0;
        }
    }
}
?>
