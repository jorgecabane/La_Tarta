<?php

session_start();

require_once 'conexion.php';
// Conectar a la base de datos
$_POST['insumo'] = CocaCola;
$_SESSION['usuario'] = 'admin';

if (isset($_POST['insumo']) && isset($_SESSION['usuario'])) {
    $usuario = $_SESSION["usuario"];
    $insumo = $_POST['insumo'];
    

        $query = "SELECT Insumos.nombre, Insumos.precio
            FROM Insumos, Usuarios, Inventario
            WHERE Usuarios.usuario= '$usuario' and
                  Insumos.Nombre = $insumo and
                  Usuarios.idUsuario = Inventario.Usuarios_idUsuario and
                  Inventario.Insumos_idInsumos = Insumos.idInsumos";

        //echo $query;
        $resultado = mysql_query($query) or die(mysql_error());

        $row2 = mysql_fetch_assoc($resultado);
        echo json_encode($row2);
    
}
?>