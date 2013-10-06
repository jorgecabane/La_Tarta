<input style='height:28px' type="number" id="barra" class="input-xlarge" placeholder="Ingrese codigo o utilice lector">
<script>
    var pepe = $('#barra');
    $(document).ready(function() {
        pepe.focus();
    });
    pepe.change(function() {
        var id = $(this).val();
        if ($.isNumeric(id)) {
            $('#error').html('<center><img id="loading" src="gif.gif"><center>');
            $.ajax({
                "url": "Buscar_Insumo.php",
                "data": {"id": id},
                "type": "post",
                "async": true,
                "success": function(prod) {
                    if (prod == 'false') {
                        $('#error').html('').html('<div class="alert alert-warning">Error!</div>');
                        $('#barra').select();
                    }//if
                    else
                    {

                        //manejo del Jason!
                        prod = $.parseJSON(prod);
                        $('#carro').prepend('<div codigo="' + prod['Codigo'] + '" class="alert alert-info producto"><span class="label label-info"><strong>' + prod['nombre'] + '</strong></span> Precio <span class="label precio">' + prod['precio'] + '</span> <a class="close" data-dismiss="alert" href="#">&times;</a></div>');
                        $('#error').html('');
                        var pepe = $('#barra');
                        $(document).ready(function() {
                            pepe.focus();
                        });
                    }//else

                }//success
            }); //ajax
        }
        //alert(id);
    });</script>
<script>
    

  $(document).ready(function(){
      function calcularmonto() {

        var Monto = 0;
        $('.producto').each(function() {
            var precio = parseInt($(this).children('.precio').text());

            Monto = Monto + precio;
        });
        return Monto;
    }
    $('#carro').bind('DOMNodeInserted DOMSubtreeModified DOMNodeRemoved', function(event) {
       $('#lado').html('<center><h4 style="color: black;">'+calcularmonto()+'</h4></center>');
       pepe.val('');
       pepe.focus();
    })
})

</script>
