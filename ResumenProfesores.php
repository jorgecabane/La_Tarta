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









                $sql = "SELECT * FROM Profesores  order by Profesores.Apellido asc ";
                $resultado = mysql_query($sql);
				echo"Ingrese el numero de Vales";
                while ($fil = mysql_fetch_assoc($resultado)) {
				echo "<form method='POST' action='ResumenProfesores.php'>";
				//<form action="ResumenProfesores.php" method="post" >
				
                    
					
					//me imagino que aqui al igual que en venta, hay que crear que cada uno sea un div.
					// despues seleccionar los atributos del div como el nombre.
					//despues el on change, activar el query que manda el nombre y el saldo nuevo que se cambio.
					//query de update saldo nuevo donde el nombre sea el relacionado con el saldo.
					
			
          //  echo "<td>$dato</td>";
			echo "<tr><td> " . $fil['Apellido'].", ".$fil['Nombre']. "</td><td>Saldo:  </td><td><input name='saldo' class='input input-small' type='number' style='height:26px'  placeholder=" . $fil['Saldo'] . ">";
        
        
        echo "<input type='hidden' name='id' value='".$fil["idProfesores"]."'>";
        echo "<input type='submit' value='Cambiar'>";
        echo "</form></td></tr>";
					
					
                } // while
				
				
	 				
				
				
				if ($_POST['saldo']) {
				
$saldo=$_POST['saldo'];


$id12=$_POST['id'];
$query="Select Saldo from Profesores where idProfesores=$id12";
$result1=mysql_query($query);
$result2=mysql_fetch_array($result1);
$result3= $result2['Saldo'];
$saldo2=($saldo*3080)+$result3;

$query33="UPDATE Profesores set Saldo=$saldo2 where idProfesores=$id12" ;    

$resultado23=mysql_query($query33);


				print "<meta http-equiv=Refresh content=\"0.0001 ; url=ResumenProfesores.php\">"; 
				 // quiero que despues de que se cambie, se actualice, no tener que hacer f5 para que se muestre y que no pregunte al hacer f5.
				} // si esque se apreto el boton cambiar
				
		
				} // si estas iniciado
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

