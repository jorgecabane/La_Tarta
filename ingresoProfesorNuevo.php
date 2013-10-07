<?php
session_start();
include_once "conexion.php";
include "header.php";
if (isset($_SESSION["usuario"])) {
    ?>
    <html>
        <div class="container-fluid">
            <div class="row-fluid"><div class="well well-small"><a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a><h3><center>Ingreso Funcionario</center></h3></div></div>
            <div class="row-fluid">
                <div class="well well-small">

                    <table class="table table-bordered table-condensed table-hover table-striped">


                        <form name="form1" action="ingresandoProfesor.php" method="POST">
                            <div><label>Nombre: </label><input name="nombre" type="text" ></div>
                            <div><label>Apellido: </label><input name="apellido" type="text"></div>
                            <input type="submit" value="Ingresar">
                        </form>
                    </table>

                    <div>	<a style="color: #F1F1F1;"href='Latarta.php'/> Volver </a>		</div>

                    <?php
                    if ($_SESSION['profe']) {
                        echo "Has ingresado correctamente a " . $_SESSION['profe'] . " ";
                    }
                } else {
                    echo "Tu no estas autentificado dirigete al <a href='index.php'/> login </a>";
                }
                ?>
            </div>
        </div>
    </div>
</html>
