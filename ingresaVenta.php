<?php

session_start();

require_once 'conexion.php';
//ingresaventa
// primero insertar un detalle
//el id va a ser un array
//
$id2 = array(12345,123455);//$_POST['id'];
$medioDePago = 'e';//$_POST['medioPago'];
$valor = 5000;//$_POST['valor'];
$sessionid= 1;//$_SESSION['id'];          // ingresar en alguna parte que se quede guardado el session id del usuario
$usuario = 'admin'; //$_SESSION["usuario"];
//$_SESSION['usuario'] = 'admin';


if (isset($_POST['profesor']) ) {
  //  $profesor=$_POST['profesor'];
    //insertar venta for each id                         luego detalle             luego rebajar el inventario for each id
    

    //    $query = "Insert into Ventas ('Valor','fecha','medioDePago','Usuarios_idUsuario','Profesores_idProfesores')
	//	Values ($valor,NOW(),'$medioDePago',$sessionid,$profesor)";

        //echo $query;
     //   $resultado = mysql_query($query) or die(mysql_error());
        
	//	$query3 = "select MAX(idVentas) from Ventas";
	//	$resultado3 = mysql_query($query3) or die(mysql_error());
		
	//	foreach ($id2 as $id) {
		
		// falta un for each para ingresar por cada id ingresado ---------------------------------------------------------------------------------------
    //   $id = trimm($id);
	//	$query2 = "Insert into detalle ('Insumos_idInsumos','Ventas_idVentas')
      //  Values ($id,$resultado3)";
	//	$resultado2 = mysql_query($query2) or die(mysql_error());
  //  }//foreAach           
}
else 
{
$query = "Insert into Ventas 
		Values (NULL,$valor,$sessionid,NULL,NOW(),'$medioDePago')";
		
		

        //echo $query;
        $resultado = mysql_query($query) or die(mysql_error());
		if($resultado){
        $query3 = "select MAX(idVentas) from Ventas";

		$resultado3 = mysql_query($query3) or die(mysql_error());
											if($resultado3)
											{
												$ultimoid= mysql_fetch_assoc($resultado3);
										$ultimoid2= $ultimoid['MAX(idVentas)'];
										print_r ($ultimoid2);
										
										foreach ($id2 as $id) {
										
										
										// falta un for each para ingresar por cada id ingresado ---------------------------------------------------------------------------------------
										$query10="select idInsumos from Insumos where Codigo=$id";
										echo $query10;
										
										$bonobon=mysql_fetch_assoc($resultado10);
										
										$hola=$bonobon['idInsumos'];
										echo $hola;
										$query2 = "Insert into detalle Values ($hola,$ultimoid2)";
										echo $query2;
									$resultado10 = mysql_query($query10) or die(mysql_error());
										}
										
										$resultado2 = mysql_query($query2) or die(mysql_error());
										
		}
		else
		{
		echo "CTM1<br>";
		}
		}
		else
		{
		echo "CTM<br>";
		}
		
		
}
}
?>