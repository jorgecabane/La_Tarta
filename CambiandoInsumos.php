<?php
//esta pagina es para cuando les cambien el costo y/o quieran cambiar el precio.
    session_start();
    include_once "conexion.php";
    include "header.php";
		if (isset($_SESSION["usuario"])) {
		
		?>
		
		<div class="container-fluid">
    
    <div class="row-fluid"><div class="well well-small"><a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a><h3><center>Cambiando Insumos</center></h3></div></div>
    <div class="row-fluid">
        <div class="well well-small">
            <table  class="table table-bordered table-striped table-hover table-condensed">
	 
	 
	 
	 
	 
	 <?php
		$sql = "SELECT * FROM Insumos ";
                $resultado = mysql_query($sql);
				
                while ($fil = mysql_fetch_assoc($resultado)) {
				echo "<form method='POST' action='CambiandoInsumos.php'>";
		
		
		echo "<tr><td> " . $fil['Nombre']."</td><td>Precio:     </td><td><input name='precio' class='input input-small' type='text' value=".$fil['precio']. " >  </td><td>Costo:  </td><td><input name='costo' class='input input-small' type='text' value=" . $fil['Costo'] . ">";
        
        
        echo "<input type='hidden' name='id' value='".$fil["idInsumos"]."'>";
        echo "<input type='submit' value='Cambiar'>";
        echo "</form></td></tr>";
					
					
                } // while
		
		
		if ($_POST['costo']) {
				
$costo=$_POST['costo'];
$precio=$_POST['precio'];

$id12=$_POST['id'];


$query33="UPDATE Insumos set precio=$precio,Costo=$costo where idInsumos=$id12" ;    

$resultado23=mysql_query($query33);


				print "<meta http-equiv=Refresh content=\"0.0001 ; url=CambiandoInsumos.php\">"; 
				 // quiero que despues de que se cambie, se actualice, no tener que hacer f5 para que se muestre y que no pregunte al hacer f5.
				} // si esque se apreto el boton cambiar
		
		
		
		
		
		
		
		
		
		
		
		
} // si estas logeado

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

 
