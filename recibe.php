<?php

include_once('conexion.php');

 
 $letras= 'f';



        $query = "SELECT Insumos.nombre
            FROM Insumos
            WHERE Insumos.Nombre like '$letras%'";
			
$resultado = mysql_query($query) or die(mysql_error());
if($resultado)
{
			}
			
		$row = array();	
		while ($row2 = mysql_fetch_assoc($resultado) )
		{
		$row[] = $row2 ;
		}
        

//print_r($row);
        echo json_encode($row[0]);


?>