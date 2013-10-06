<?php

session_start();
include "header.php";
include "conexion.php";
$_SESSION['retiro'] = $_POST['retiro'];
$_SESSION['nuevacaja'] = $_POST['nuevacaja'];
$ingresarcierrecaja = "insert into caja 
values (null," . $_SESSION['inicial'] . "," . $_SESSION['totalefectivo'] . "," . $_SESSION['credito'] . "," . $_SESSION['debito'] . "," . $_SESSION['efectivo'] . "," . $_SESSION['vales'] . "," . $_SESSION['inicioboleta'] . "," . $_SESSION['finalboleta'] . "," . $_SESSION['totalboleta'] . "," . $_SESSION['sinboleta'] . "," . $_SESSION['retiro'] . "," . $_SESSION['nuevacaja'] . ",now())";
$ingresando = mysql_query($ingresarcierrecaja) or die (mysql_error());
if ($ingresando) {

//echo $ingresarcierrecaja;
    echo "<center> <h4><p style='color:#81F781'>Cierre realizado con exito</p></h4>";
    echo "<meta http-equiv=Refresh content=\"5 ; url=Latarta.php\">";
}
?>
