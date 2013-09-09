<?php
include "header.php";
?>
<div class="container-fluid">
    
    <div class="row-fluid"><div class="well well-small"><a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a><h3><center>Profesores</center></h3></div></div>
    <div class="row-fluid">
        <div class="well well-small">
            <table  class="table table-bordered table-striped table-hover table-condensed">
                <?php
                include "conexion.php";









                $sql = "SELECT Profesores.Nombre N, Profesores.Apellido S, Profesores.Saldo Sa FROM Profesores order by Profesores.Apellido asc ";
                $resultado = mysql_query($sql);
                while ($fil = mysql_fetch_assoc($resultado)) {
                    echo "<tr><td> " . $fil['S'].", ".$fil['N']. "</td><td>Saldo:  </td><td>" . $fil['Sa'] . "</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
