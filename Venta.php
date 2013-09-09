<?php
include "header.php";
include "modal.php";
?>
        <div class="container-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class='span12'>
                        <a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a>
                        <h3 style="color: #F1F1F1;">Sistema de Ventas</h3>
                    </div>
                </div>
                <div id="codigo" class="row-fluid  well well-small">
                    <?php include "input.php"?>
                    

                </div>

                <div class="row-fluid well well-small">
                    <div id="error" class="row-fluid">

                    </div>
                    <div class="row-fluid">
                        <div class="span9" id="carro">
                            
                        </div>



                        <div  class="span3 well well-small" style="background: rgb(30,87,153); /* Old browsers */
                             background: -moz-linear-gradient(45deg,  rgba(30,87,153,1) 0%, rgba(41,137,216,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%); /* FF3.6+ */
                             background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(30,87,153,1)), color-stop(50%,rgba(41,137,216,1)), color-stop(51%,rgba(32,124,202,1)), color-stop(100%,rgba(125,185,232,1))); /* Chrome,Safari4+ */
                             background: -webkit-linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Chrome10+,Safari5.1+ */
                             background: -o-linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Opera 11.10+ */
                             background: -ms-linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* IE10+ */
                             background: linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* W3C */
                             filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
                             color: #F1F1F1;">
                            <center><h3>Monto Total</h3></center>
                            <div id="lado" class="well well-small">
                                
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <center>
                        <a class="btn btn-danger" href="#myModal" data-toggle="modal"><br><strong>Tarjetas Bancarias</strong><br><br></a>
                        <a class="btn btn-success" href="#myModal2" data-toggle="modal"><br><strong>Dinero en Efectivo</strong><br><br></a>
                        <a class="btn btn-info" href="#myModal3" data-toggle="modal"><br><strong>Ticket Funcionarios</strong><br><br></a>
                    </center>
                </div>
            </div>
        </div>
        <div id="footer">

            <?php //require.... ?>
        </div>



    </body>
</html>
