<?php
 session_start();
include "header.php";
if (isset($_SESSION["usuario"])) {
?>
<h3><center>Inventario</center></h3></div></div>
    <div class="row-fluid">
        <div class="well well-small">
            <table  class="table table-bordered table-striped table-hover table-condensed">
                <?php
                include "conexion.php";









                $sql = "SELECT Insumos.Nombre N, Inventario.Stock S ,Inventario.Insumos_idInsumos I FROM Inventario, Insumos, Usuarios  WHERE Insumos.idInsumos=Inventario.Insumos_idInsumos and Inventario.Usuarios_idUsuario=Usuarios.idUsuario";
                $resultado = mysql_query($sql);

                while ($fil = mysql_fetch_assoc($resultado)) {
				echo "<form method='POST' action='inventario.php'>";
                    echo "<tr><td>Producto</td><td> " . $fil['N'] . "</td><td>Stock:  </td><td><input name='stock' class='input input-small' type='number' style='height:26px'  placeholder=" . $fil['S'] . ">";
					//echo "<tr><td> " . $fil['Apellido'].", ".$fil['Nombre']. "</td><td>Saldo:  </td><td><input name='saldo' class='input input-small' type='text' placeholder=" . $fil['Saldo'] . ">";


					echo "<input type='hidden' name='id' value='".$fil["I"]."'>";
        echo "<input type='submit' value='Cambiar'>";
        echo "</form></td></tr>";
                }

				if ($_POST['stock']) {

$stock=$_POST['stock'];


$id12=$_POST['id'];
$query="Select Stock from Inventario where Insumos_idInsumos=$id12";
$result1=mysql_query($query);
$result2=mysql_fetch_array($result1);
$result3= $result2['Stock'];
$saldo2=$stock+$result3;

$query33="UPDATE Inventario set Stock=$saldo2 where Insumos_idInsumos=$id12" ;    

$resultado23=mysql_query($query33);


				print "<meta http-equiv=Refresh content=\"0.0001 ; url=inventario.php\">"; 






				}


				}
				else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
}
                ?>
            </table>
<?php
include "footer.php";
?>
