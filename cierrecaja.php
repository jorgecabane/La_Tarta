<?php
session_start();
include_once "conexion.php";
include "header.php";
if (isset($_SESSION["usuario"])) {
    ?>
    <html>
        <?php
        if (!$_POST) {
            ?>
            <h1 style="color:#FF0040">Cierre de caja</h1>
            <table class="table table-bordered table-condensed table-bordered">
                <form class="form form-horizontal" action="cierrecaja.php" method="post">

                    <tr style="color:#81F781"><td> Caja Inicial</td><td>   <input style="height:26px" class="input input-medium" type="number" name="inicial"></td></tr>
                    <tr style="color:#81F781"><td>  Billetes de 20 </td><td> <input style="height:26px" class="input input-medium" type="number" name="veinte"></td></tr>
                    <tr style="color:#81F781"><td>  Billetes de 10 </td><td> <input style="height:26px" class="input input-medium" type="number" name="diez"></td></tr>
                    <tr style="color:#81F781"><td>   Billetes de 5  </td><td> <input style="height:26px" class="input input-medium" type="number" name="cinco"></td></tr>
                    <tr style="color:#81F781"><td>   Billetes de 2  </td><td> <input style="height:26px" class="input input-medium" type="number" name="dos"></td></tr>
                    <tr style="color:#81F781"><td>   Billetes de 1  </td><td> <input style="height:26px" class="input input-medium" type="number" name="uno"></td></tr>
                    <tr style="color:#81F781"><td>   Monedas        </td><td> <input style="height:26px" class="input input-medium" type="number" name="monedas"></td></tr>
                    <tr style="color:#81F781"><td>   Venta Debito   </td><td> <input style="height:26px" class="input input-medium" type="number" name="debito"></td></tr>
                    <tr style="color:#81F781"><td>   Venta Credito  </td><td> <input style="height:26px" class="input input-medium" type="number" name="credito"></td></tr>
                    <tr style="color:#81F781"><td>   Vales          </td><td> <input style="height:26px" class="input input-medium" type="number" name="vales"></td></tr>
                    <tr style="color:#81F781"><td>   Boleta         </td><td> <input style="height:26px" class="input input-small" type="number" name="inicio">-<input style="height:26px" class="input input-small" type="number" name="final"></td></tr>
                    <tr style="color:#81F781"><td>   Total Boletas </td><td>  <input style="height:26px" class="input input-medium" type="number" name="totalboleta"></td></tr>
                    <tr><td> <input type="submit" value="Calcular" class="btn btn-success"></td><td></td></tr></table>




        </form>
        </html>
        <?php
    } else {
        ?>
        <h1 style="color:#FF0040">Cierre de caja</h1>

        <form class="form form-horizontal" action="cierrecaja.php" method="post">
            <table class="table table-bordered table-condensed table-bordered">
                <tr style="color:#81F781"><td> Caja Inicial</td><td>   <input style="height:26px" class="input input-medium" type="number" name="inicial"></td></tr>
                <tr style="color:#81F781"><td>  Billetes de 20 </td><td> <input style="height:26px" class="input input-medium" type="number" name="veinte"></td></tr>
                <tr style="color:#81F781"><td>  Billetes de 10 </td><td> <input style="height:26px" class="input input-medium" type="number" name="diez"></td></tr>
                <tr style="color:#81F781"><td>   Billetes de 5  </td><td> <input style="height:26px" class="input input-medium" type="number" name="cinco"></td></tr>
                <tr style="color:#81F781"><td>   Billetes de 2  </td><td> <input style="height:26px" class="input input-medium" type="number" name="dos"></td></tr>
                <tr style="color:#81F781"><td>   Billetes de 1  </td><td> <input style="height:26px" class="input input-medium" type="number" name="uno"></td></tr>
                <tr style="color:#81F781"><td>   Monedas        </td><td> <input style="height:26px" class="input input-medium" type="number" name="monedas"></td></tr>
                <tr style="color:#81F781"><td>   Venta Debito   </td><td> <input style="height:26px" class="input input-medium" type="number" name="debito"></td></tr>
                <tr style="color:#81F781"><td>   Venta Credito  </td><td> <input style="height:26px" class="input input-medium" type="number" name="credito"></td></tr>
                <tr style="color:#81F781"><td>   Vales          </td><td> <input style="height:26px" class="input input-medium" type="number" name="vales"></td></tr>
                <tr style="color:#81F781"><td>   Boleta         </td><td> <input style="height:26px" class="input input-small" type="number" name="inicio">-<input style="height:26px" class="input input-small" type="number" name="final"></td></tr>
                <tr style="color:#81F781"><td>   Total Boletas </td><td>  <input style="height:26px" class="input input-medium" type="number" name="totalboleta"></td></tr>
                <tr><td> <input type="submit" value="Calcular" class="btn btn-success"></td></tr>
            </table>
        </form>
        </html>
        <?php
        $_SESSION['inicial'] = $_POST['inicial'];
        $veinte = $_POST['veinte'] * 20000;
        $diez = $_POST['diez'] * 10000;
        $cinco = $_POST['cinco'] * 5000;
        $dos = $_POST['dos'] * 2000;
        $uno = $_POST['uno'] * 1000;
        $monedas = $_POST['monedas'];
        $_SESSION['debito'] = $_POST['debito'];
        $_SESSION['credito'] = $_POST['credito'];
        $_SESSION['vales'] = $_POST['vales'] * 3080;
        $_SESSION['inicioboleta'] = $_POST['inicio'];
        $_SESSION['finalboleta'] = $_POST['final'];
        $_SESSION['totalboleta'] = $_POST['totalboleta'];
        $_SESSION['totalefectivo'] = $veinte + $diez + $cinco + $dos + $uno + $monedas;
        $_SESSION['sinboleta'] = (($_SESSION['totalefectivo'] - $_SESSION['inicial']) + $_SESSION['credito'] + $_SESSION['debito']) - $_SESSION['totalboleta'];
        $_SESSION['efectivo'] = ($_SESSION['totalefectivo'] - $_SESSION['inicial']);
        echo "<p style='color:#81F781'>Resumen cierre de caja<br>";
        echo "Caja Inicial: " . $_SESSION['inicial'] . "<br>";
        echo "Vales: " . $_SESSION['vales'] . "<br>";
        echo "Total Efectivo: " . $_SESSION['totalefectivo'] . "<br>";
        echo "Venta Debito: " . $_SESSION['debito'] . "<br>";
        echo "Venta Credito: " . $_SESSION['credito'] . "<br>";
        echo "Venta Efectivo: " . $_SESSION['efectivo'] . "<br>";
        echo "Boleta Inicial: " . $_SESSION['inicioboleta'] . " Boleta Final " . $_SESSION['finalboleta'] . "<br>";
        echo "Total venta con boleta: " . $_SESSION['totalboleta'] . "<br>";
        echo "Venta sin boleta: " . $_SESSION['sinboleta'] . "<br>";
        echo "Total Ventas: " . ($_SESSION['efectivo'] + $_SESSION['debito'] + $_SESSION['credito'] + $_SESSION['vales']) . "<br>";
        echo "<form action='cierrecaja1.php' method=POST>
      <p style='color:#81F781'>Ingrese retiro <input style='height:26px' type='number' name='retiro'><br>
      Ingrese Nueva Caja <input style='height:26px' type='number' name='nuevacaja'><br></p>
      ";
        echo "<input type='submit' value='Cerrar Caja' class='btn btn-danger'> </form>";
    }












    echo "<div>	<a style='color: #F1F1F1;'href='Latarta.php'/> Volver </a>		</div>";
   
} else {
    echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>";
}
?>
