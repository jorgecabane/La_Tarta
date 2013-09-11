<?php
 session_start();
include "header.php";
if (isset($_SESSION["usuario"])) {
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
</body>
</html>
