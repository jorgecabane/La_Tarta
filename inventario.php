<?php
include "header.php";
?>
<div class="container-fluid">
    
    <div class="row-fluid"><div class="well well-small"><a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a><h3><center>Inventario</center></h3></div></div>
    <div class="row-fluid">
        <div class="well well-small">
            <table  class="table table-bordered table-striped table-hover table-condensed">
                <?php
                include "conexion.php";









                $sql = "SELECT Insumos.Nombre N, Inventario.Stock S FROM Inventario, Insumos, Usuarios  WHERE Insumos.idInsumos=Inventario.Insumos_idInsumos and Inventario.Usuarios_idUsuario=Usuarios.idUsuario";
                $resultado = mysql_query($sql);
                while ($fil = mysql_fetch_assoc($resultado)) {
                    echo "<tr><td>Producto</td><td> " . $fil['N'] . "</td><td>Stock:  </td><td>" . $fil['S'] . "</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
