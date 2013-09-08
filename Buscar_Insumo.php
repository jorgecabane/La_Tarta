<?php

session_start();

require_once 'conexion.php';
// Conectar a la base de datos
$_POST['id'] = 12345;
$_SESSION['usuario'] = 'admin';

if (isset($_POST['id']) && isset($_SESSION['usuario'])) {
    $usuario = $_SESSION["usuario"];
    $id = $_POST['id'];
    if (is_numeric($id)) {

        $query = "SELECT Insumos.nombre, Insumos.precio
            FROM Insumos, Usuarios, Inventario
            WHERE Usuarios.usuario= '$usuario' and
                  Insumos.Codigo = $id and
                  Usuarios.idUsuario = Inventario.Usuarios_idUsuario and
                  Inventario.Insumos_idInsumos = Insumos.idInsumos";

        //echo $query;
        $resultado = mysql_query($query) or die(mysql_error());

        $row2 = mysql_fetch_assoc($resultado);
        echo json_encode($row2);
    }
}
?>