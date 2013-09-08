<script>
        $("#ingresoInsumos").autocomplete({
            /**
             * esta función genera el autocomplete para el campo de diagnostico (input)
             * al seleccionar y escribir 2 letras se ejecuta el ajax
             * busca en la base de datos en el archivo autocompleteDiagnostico.php
             * el jSon correspondiente a las coincidencias
             *
             * Funcion select que ejecutará una accion cuando se devuelva
             */
            source: function(request, response) {

                $.ajax({
                    url: "../../../ajax/autocompleteAlergias.php",
                    data: {
                        name_startsWith: request.term

                    },
                    type: "post",
                    success: function(data) {
                        var output = jQuery.parseJSON(data);

                        response($.map(output, function(item) {
                            return {
                                label: item.Nombre,
                            }
                        })//end map
                                );  // end response
                    }//end success

                });//end ajax
            }, // end source
            select: function(event, ui) {

                var nombre = ui.item.nombre
          

                $("#alergias_seleccionadas").removeAttr('nombre');
            },
            minLength: 2,
            open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            }, //end open
            close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            } //end close
        });//autocomplete ALergias
    </script><!-- autocomplete Alergias -->