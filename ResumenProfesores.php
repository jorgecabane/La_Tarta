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
				
				?> <form action="ResumenProfesores.php" method="post" >
				<?php 
                    echo "<tr><td> " . $fil['S'].", ".$fil['N']. "</td><td>Saldo:  </td><td><input name='saldo' class='input input-small' type='text' placeholder=" . $fil['Sa'] . "></td></tr>";
					
					//me imagino que aqui al igual que en venta, hay que crear que cada uno sea un div.
					// despues seleccionar los atributos del div como el nombre.
					//despues el on change, activar el query que manda el nombre y el saldo nuevo que se cambio.
					//query de update saldo nuevo donde el nombre sea el relacionado con el saldo.
					
					
					
					
                } // while
				if (isset($_POST['Cambiar'])) {
				$_POST['saldo']=$saldo;
//$nombre=$fil['S']; //del profe a cambiar         ------------------> no tengo ni chucha idea de como tomar el nombre del profesor en el cual estas cambiando el saldo.
$nombre='Nico';
$query="UPDATE Profesores set Saldo = $saldo where Nombre='$nombre'" ;        // quiero que despues de que se cambie, se actualice, no tener que hacer f5 para que se muestre y que no pregunte al hacer f5.
$resultado2=mysql_query($query);
				
				}
				
			?>
			
			</table>
				<div><input name="Cambiar" type="submit" value='Cambiar'></div>
				</form>
				<?php
				} // si estas iniciado
else
{
echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>" ;
}

                ?>
				
			
            
        </div>
    </div>
</div>
<div>	<a style="color: #F1F1F1;"href='Latarta.php'/> Volver </a>		</div>
</body>
</html>

