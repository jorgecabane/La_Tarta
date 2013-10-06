<?php
session_start();
include "header.php";
if (isset($_SESSION["usuario"])) {
    ?>
    <div class="container-fluid">

        <div class="row-fluid"><div class="well well-small"><a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a><h3><center>Resumen cierres de caja</center></h3></div></div>
        <div class="row-fluid">
            <div class="well well-small">
                <table  class="table table-bordered table-striped table-hover table-condensed">
                    <?php
                    include "conexion.php";









                    $sql = "SELECT * FROM caja";
                    $resultado = mysql_query($sql);
                    echo "<tr>
                        <th>Fecha</th>
		<th>Caja Inicial</th>
		<th>Total Efectivo</th>		
		<th>Ventas Credito</th>
                <th>Ventas Debito</th>
                <th>Ventas Efectivo</th>
                <th>Ventas Vales</th>
                <th>Total Ventas Boleta</th>
                <th>Total Ventas sin boleta</th>
                <th>Total Ventas</th>
                <th>Retiro</th>
                <th>Nueva Caja</th>
                
	</tr>
";

                    while ($fil = mysql_fetch_assoc($resultado)) {
                        
                        //<form action="ResumenProfesores.php" method="post" >
                        //me imagino que aqui al igual que en venta, hay que crear que cada uno sea un div.
                        // despues seleccionar los atributos del div como el nombre.
                        //despues el on change, activar el query que manda el nombre y el saldo nuevo que se cambio.
                        //query de update saldo nuevo donde el nombre sea el relacionado con el saldo.
                        //  echo "<td>$dato</td>";
                        echo "<tr><td> " . $fil['fecha'] . "</td><td>". $fil['cajainicial'] . "</td><td>"
                                . $fil['totalefectivo'] . "</td><td>". $fil['ventacredito'] . "</td><td>"
                                . $fil['ventadebito'] . "</td><td>". $fil['ventaefectivo'] . "</td><td>"
                                . $fil['ventavales'] . "</td><td>". $fil['totalboleta'] . "</td><td>"
                                . $fil['ventasinboleta'] . "</td><td>". ($fil['ventacredito']+$fil['ventadebito']+$fil['ventaefectivo']+$fil['ventavales']) . "</td><td>"
                                . $fil['retiro'] . "</td><td>". $fil['nuevacaja'] . "</td><td>";


                        echo "</td></tr>";
    $excel.="$fil[fecha]\t$fil[cajainicial]\t$fil[totalefectivo]\t";  
    $excel.="$fil[ventacredito]\t$fil[ventadebito]\t$fil[ventaefectivo]\t"; 
    $excel.="$fil[ventavales]\t$fil[totalboleta]\t$fil[ventasinboleta]\t"; 
    $excel.="=($fil[ventacredito]+$fil[ventadebito]+$fil[ventaefectivo]+$fil[ventavales])\t$fil[retiro]\t$fil[nuevacaja]\n"; 
    
                    } // while
                    echo '<form action="exportexcel.php" method = "POST"> 
<input type="hidden" name="export" value="'.$excel.'"/> 
<input type = "submit" value = "Exportar a Excel"> 
</form>';  



  






                } // si estas iniciado
                else {
                    echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>";
                }
                ?>



            </table>
        </div>
    </div>
</div>
<div>	<a style="color: #F1F1F1;"href='Latarta.php'/> Volver </a>		</div>
</body>
</html>

