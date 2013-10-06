<?php
session_start();
include_once "conexion.php";
include "header.php";
if (isset($_SESSION["usuario"])) {
    ?>
    <html>

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
                    Boleta         <input class="input input-small" type="number" name="inicio">-<input class="input input-small" type="number" name="final"><br><br>
                    
                    
                    </p></h4>
        </form>
    </html>












    <?php
    echo '<a href="logout.php">Logout</a>';
} else {
    echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>";
}
?>
