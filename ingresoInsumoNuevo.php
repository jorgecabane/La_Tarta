<?php
session_start();
include_once "conexion.php";
include "header.php";
if (isset($_SESSION["usuario"])) {
    ?>
    <script language=JavaScript>
    <!-- Script courtesy of http://www.web-source.net - Your Guide to Professional Web Site Design and Development
        function clear_textbox()
        {
            if (document.form1.codigo.value == "Utilice lector de barra o manual.")
                document.form1.codigo.value = "";
        }
        -- ></script>
    <h3><center>Ingreso Insumo</center></h3></div></div>
            <div class="row-fluid">
                <div class="well well-small">

                    <table class="table table-bordered table-condensed table-hover table-striped">




                        <form name="form1" action="ingresandoProducto.php" method="POST">
                            <div><label>Nombre Producto: </label><input name="producto" type="text" ></div>
                            <div><label>Codigo:          </label><input name="codigo" type="number" style="height:26px" onFocus=clear_textbox() value="Utilice lector de barra o manual."></div>
                            <div><label>Precio: </label><input name="precio" type="number" style="height:26px"></div>
                            <div><label>Costo: </label><input name="costo" type="number" style="height:26px"></div>
                            <input type="submit" value="Ingresar">
                        </form>
                    </table>

                    <div>	<a style="color: #F1F1F1;"href='Latarta.php'/> Volver </a>		</div>	


                    <?php
                    if ($_SESSION['insumo']) {
                        echo "Has ingresado correctamente a " . $_SESSION['insumo'] . " ";
                    }
                } else {
                    echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>";
                }
include "footer.php";                ?>
