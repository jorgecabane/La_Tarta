<?php
session_start();
include_once "conexion.php";
include "header.php";
if (isset($_SESSION["usuario"])) {
    ?>
    <html>
<?php
if(!$_POST)
{?>
        <h1 style="color:#FF0040">Cierre de caja</h1>

        <form class="form form-horizontal" action="cierrecaja.php" method="post">
            <h4><p style="color:#81F781">
                    Caja Inicial   <input class="input input-medium" type="number" name="inicial"><br>
                    Billetes de 20 <input class="input input-medium" type="number" name="veinte"><br>
                    Billetes de 10 <input class="input input-medium" type="number" name="diez"><br>
                    Billetes de 5  <input class="input input-medium" type="number" name="cinco"><br>
                    Billetes de 2  <input class="input input-medium" type="number" name="dos"><br>
                    Billetes de 1  <input class="input input-medium" type="number" name="uno"><br>
                    Monedas        <input class="input input-medium" type="number" name="monedas"><br>
                    Venta Debito   <input class="input input-medium" type="number" name="debito"><br>
                    Venta Credito  <input class="input input-medium" type="number" name="credito"><br>
                    Vales          <input class="input input-medium" type="number" name="valess"><br>
                    Boleta         <input class="input input-small" type="number" name="inicio">-<input class="input input-small" type="number" name="final"><br>
                    Retiro         <input class="input input-medium" type="number" name="retiro"><br>
                                   <input type="submit">
                                       
                    
                    
                    </p></h4>
        </form>
    </html>
    <?php
}
else 
{?>
 <h1 style="color:#FF0040">Cierre de caja</h1>

        <form class="form form-horizontal" action="cierrecaja.php" method="post">
            <h4><p style="color:#81F781">
                    Caja Inicial   <input class="input input-medium" type="number" name="inicial"><br>
                    Billetes de 20 <input class="input input-medium" type="number" name="veinte"><br>
                    Billetes de 10 <input class="input input-medium" type="number" name="diez"><br>
                    Billetes de 5  <input class="input input-medium" type="number" name="cinco"><br>
                    Billetes de 2  <input class="input input-medium" type="number" name="dos"><br>
                    Billetes de 1  <input class="input input-medium" type="number" name="uno"><br>
                    Monedas        <input class="input input-medium" type="number" name="monedas"><br>
                    Venta Debito   <input class="input input-medium" type="number" name="debito"><br>
                    Venta Credito  <input class="input input-medium" type="number" name="credito"><br>
                    Vales          <input class="input input-medium" type="number" name="vales"><br>
                    Boleta         <input class="input input-small" type="number" name="inicio">-<input class="input input-small" type="number" name="final"><br>
                    Total Boletas  <input class="input input-medium" type="number" name="totalboleta"><br>
                    
                    
                    
                    </p></h4>
        </form>
    </html>
<?php
$_SESSION['inicial']=$_POST['inicial'];
$veinte=$_POST['veinte']*20000;
$diez=$_POST['diez']*10000;
$cinco=$_POST['cinco']*5000;
$dos=$_POST['dos']*2000;
$uno=$_POST['uno']*1000;
$monedas=$_POST['monedas'];
$_SESSION['debito']=$_POST['debito'];
$_SESSION['credito']=$_POST['credito'];
$_SESSION['vales']=$_POST['vales']*3080;
$_SESSION['inicioboleta']=$_POST['inicio'];
$_SESSION['finalboleta']=$_POST['final'];
$_SESSION['totalboleta']=$_POST['totalboleta'];
$_SESSION['totalefectivo']=$veinte+$diez+$cinco+$dos+$uno+$monedas;
$_SESSION['sinboleta']=(($_SESSION['totalefectivo']-$_SESSION['inicial'])+$_SESSION['credito']+$_SESSION['debito'])-$_SESSION['totalboleta'];
echo "<p style='color:#81F781'>Resumen cierre de caja<br>";
echo "Caja Inicial: ".$_SESSION['inicial']."<br>";
echo "Vales: ".$_SESSION['vales']."<br>";
echo "Total Efectivo: ".$_SESSION['totalefectivo']."<br>";
echo "Venta Debito: ".$_SESSION['debito']."<br>";
echo "Venta Credito: ".$_SESSION['credito']."<br>";
echo "Venta Efectivo: ".($_SESSION['totalefectivo']-$_SESSION['inicial'])."<br>";
echo "Boleta Inicial: ".$_SESSION['inicioboleta']." Boleta Final ".$_SESSION['finalboleta']."<br>";
echo "Total venta con boleta: ".$_SESSION['totalboleta'];
echo "Venta sin boleta: ".$_SESSION['sinboleta'];
echo "Total Ventas: ".($_SESSION['totalefectivo']+$_SESSION['debito']+$_SESSION['credito']+$_SESSION['vales']);




}













    echo '<a href="logout.php">Logout</a>';
} else {
    echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>";
}
?>
