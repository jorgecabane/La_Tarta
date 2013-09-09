<?php
include "conexion.php";
?>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Pago con Tarjeta</h3>
    </div>
    <div class="modal-body">
       <center> <div class="btn-group" data-toggle="buttons-radio">
  <button type="button" class="btn btn-success btn-large">Debito</button>
  <button type="button" class="btn btn-warning btn-large">Credito</button>
</div></center>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Volver</button>
        <button class="btn btn-danger" id="ventaTarjeta">Terminar Venta</button>
    </div>
</div>


<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Pago con Efectivo</h3>
    </div>
    <div class="modal-body">
        <div class="alert alert-info">Total en Venta: <h4 class="total"><strong></strong></h4></div>
        <div class="alert">Paga con:<input type="text" id="cash" name="cash "placeholder="ingrese monto"></div>
        <div class="alert alert-success">Vuelto: <h4 class="vuelto"><strong></strong></h4></div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Volver</button>
        <button class="btn btn-danger" id="ventaCash">Terminar Venta</button>
    </div>
</div>


<div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Pago Funcionarios</h3>
    </div>
    <div class="modal-body">
        <div >
            <?php
            $query = "SELECT *   from Profesores";

            //echo $query;
            $resultado = mysql_query($query) or die(mysql_error());
            if ($resultado) {
                echo"<select name='profe' id='profe'>";
                echo "<option value=0>Seleccione Funcionario</option>";
                while ($row = mysql_fetch_assoc($resultado)) {

                    echo "<option value='" . $row['idProfesores'] . "'>" . $row['Apellido'] . ", " . $row['Nombre'] . "</option>";
                }
                echo"</select>";
            }
            ?>
        </div>
        <div id="saldo" >

        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Volver</button>
        <button class="btn btn-danger" id="ventaProfesor">Save changes</button>
    </div>
</div>
<script>
    var juan = $('#profe');

    juan.change(function() {
        var id = $(this).val()
//alert(id)
        $.ajax({
            "url": "Buscar_Profe.php",
            "data": {"id": id},
            "type": "post",
            "async": true,
            "success": function(prod) {

                prod = $.parseJSON(prod);
                // alert(prod);
                $('#saldo').html('Saldo: ' + prod['Saldo']);




            }//success
        });//ajax

        //alert(id);
    });
</script>
<script>
    $('#myModal2').on('shown.bs.modal', function() {
        var pedro = $('#cash');

        pedro.focus();
        $('.total').text($('#lado').text());

        pedro.keyup(function() {
            var total = $('.total').text();
            var cash = pedro.val();
            var cambio = cash - total;

            $('.vuelto').text(cambio);
            
        });



    });


</script>   
