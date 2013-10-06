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








<<<<<<< HEAD
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
				
			
            
=======

                    $sql = "SELECT * FROM Profesores  order by Profesores.Apellido asc ";
                    $resultado = mysql_query($sql);

                    while ($fil = mysql_fetch_assoc($resultado)) {
                        echo "<form method='POST' action='ResumenProfesores.php'>";
                        //<form action="ResumenProfesores.php" method="post" >
                        //me imagino que aqui al igual que en venta, hay que crear que cada uno sea un div.
                        // despues seleccionar los atributos del div como el nombre.
                        //despues el on change, activar el query que manda el nombre y el saldo nuevo que se cambio.
                        //query de update saldo nuevo donde el nombre sea el relacionado con el saldo.
                        //  echo "<td>$dato</td>";
                        echo "<tr><td> " . $fil['Apellido'] . ", " . $fil['Nombre'] . "</td><td>Saldo:  </td><td><input name='saldo'  type='text' placeholder=" . $fil['Saldo'] . ">";


                        echo "<input type='hidden' name='id' value='" . $fil["idProfesores"] . "'>";
                        echo "<input type='submit' value='Cambiar'>";
                        echo "</form></td></tr>";
                    } // while





                    if ($_POST['saldo']) {

                        
                   

                       $saldo=$_POST['saldo']*3080; 
                       $query2= "Select Saldo from Profesores where idProfesores=". $_POST['id'];
                       $resultadin= mysql_query($query2);
                       $saldoprof = mysql_fetch_assoc($resultadin);
                       $saldototal=$saldo+$saldoprof['Saldo'];
                       //echo $query2."<br>";
                       //echo $saldo."<br>";
                       //echo $saldoprof['Saldo']."<br>";
                       //echo $saldototal."jiji <br>";
                       

                        $query33 = "UPDATE Profesores set Saldo=".$saldototal." where idProfesores=". $_POST['id']."";
                        
                        //echo$query33;





                        $resultado23 = mysql_query($query33);
                        print "<meta http-equiv=Refresh content=\"0.0001 ; url=ResumenProfesores.php\">";
                        // quiero que despues de que se cambie, se actualice, no tener que hacer f5 para que se muestre y que no pregunte al hacer f5.
                    } // si esque se apreto el boton cambiar
                } // si estas iniciado
                else {
                    echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>";
                }
                ?>



            </table>
>>>>>>> e9f5c5b9fda5c18eed3641c628784bc7e019a773
        </div>
    </div>
</div>
<div>	<a style="color: #F1F1F1;"href='Latarta.php'/> Volver </a>		</div>
</body>
</html>

<<<<<<< HEAD
=======

>>>>>>> e9f5c5b9fda5c18eed3641c628784bc7e019a773
