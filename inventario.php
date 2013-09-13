<?php
 session_start();
     include "conexion.php";
include "header.php";
if (isset($_SESSION["usuario"])) {
?>
<div class="container-fluid">
    
    <div class="row-fluid"><div class="well well-small"><a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a><h3><center>Inventario</center></h3></div></div>
    <div class="row-fluid">
        <div class="well well-small">
            <table  class="table table-bordered table-striped table-hover table-condensed">
                <?php
            









                $sql = "SELECT Insumos.Nombre N, Inventario.Stock S FROM Inventario, Insumos, Usuarios  WHERE Insumos.idInsumos=Inventario.Insumos_idInsumos and Inventario.Usuarios_idUsuario=Usuarios.idUsuario";
                $resultado = mysql_query($sql);
                while ($fil = mysql_fetch_assoc($resultado)) {
                    echo "<tr><td>Producto</td><td> " . $fil['N'] . "</td><td>Stock:  </td><td><input name='stock' class='input input-small' type='text' placeholder=" . $fil['S'] . "></td></tr>";
					//$_POST['stock']=$stock;
					//$_POST['nombre']=$nombre; //del insumo
//$query1=" Select Inventario.Insumos_idInsumos from Inventario, Insumos where Inventario.Insumos_idInsumos=Insumos.idInsumos and Insumos.Nombre='$nombre' ";
//$resultado1=mysql_query($query1);
//$holi=$resultado1['Inventario.Insumos_idInsumos'];
//$query="UPDATE Inventario set Stock = $stock where Insumos_idInsumos=$holi" ;
//$resultado=mysql_query($query);
					
					
                }
				}
				else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
}
                ?>
            </table>
        </div>
    </div>
</div>
<div>	<a style="color: #F1F1F1;"href='Latarta.php'/> Volver </a>		</div>
</body>
</html>
