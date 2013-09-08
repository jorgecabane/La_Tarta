<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- JQUERY-->
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

    </head>
    <body style="background: rgb(30,87,153); /* Old browsers */
          background: -moz-linear-gradient(-45deg,  rgba(30,87,153,1) 0%, rgba(41,137,216,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%); /* FF3.6+ */
          background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(50%,rgba(41,137,216,1)), color-stop(51%,rgba(32,124,202,1)), color-stop(100%,rgba(125,185,232,1))); /* Chrome,Safari4+ */
          background: -webkit-linear-gradient(-45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Chrome10+,Safari5.1+ */
          background: -o-linear-gradient(-45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Opera 11.10+ */
          background: -ms-linear-gradient(-45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* IE10+ */
          background: linear-gradient(135deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* W3C */
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
          ">
        <div class="container-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class='span12'>
                        <a class="btn btn-inverse pull-right">Menu <i class="icon icon-white icon-th-list"></i></a>
                        <h3 style="color: #F1F1F1;">Sistema de Ventas</h3>
                    </div>
                </div>
                <div id="codigo" class="row-fluid  well well-small">
                    <?php //require()..?>
                    <input type="text" id="barra" class="input-xlarge" placeholder="Ingrese nombre o utilice lector">

                </div>

                <div class="row-fluid well well-small">
                    <div id="error" class="row-fluid">

                    </div>
                    <div class="row-fluid">
                        <div class="span9" id="carro">
                            <div class="alert alert-info">

                                <span class="label label-info"><strong>Coca-Cola Lata 350cc</strong></span>

                                Precio <span class="label">500</span> <a class="close" data-dismiss="alert" href="#">&times;</a>

                            </div>
                            <div class="alert alert-info"><span class="label label-info"><strong>Papas fritas Lays 80gr</strong></span> Precio <span class="label">250</span> <a class="close" data-dismiss="alert" href="#">&times;</a></div>
                            <div class="alert alert-info"><span class="label label-info"><strong>Chocolate Trencito 100gr</strong></span> Precio <span class="label">300</span> <a class="close" data-dismiss="alert" href="#">&times;</a></div>
                            <div class="alert alert-info"><span class="label label-info"><strong>Agua Mineral Cachantún 500cc</strong></span> Precio <span class="label">400</span> <a class="close" data-dismiss="alert" href="#">&times;</a></div>
                        </div>



                        <div class="span3 well well-small" style="background: rgb(30,87,153); /* Old browsers */
                             background: -moz-linear-gradient(45deg,  rgba(30,87,153,1) 0%, rgba(41,137,216,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%); /* FF3.6+ */
                             background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(30,87,153,1)), color-stop(50%,rgba(41,137,216,1)), color-stop(51%,rgba(32,124,202,1)), color-stop(100%,rgba(125,185,232,1))); /* Chrome,Safari4+ */
                             background: -webkit-linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Chrome10+,Safari5.1+ */
                             background: -o-linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Opera 11.10+ */
                             background: -ms-linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* IE10+ */
                             background: linear-gradient(45deg,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* W3C */
                             filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
                             color: #F1F1F1;">
                            Informacion Util. (por ej: total acumulado, cantidad de productos, informacion del vendedor, etc.)
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <center>
                        <a class="btn btn-danger" href="#"><br><strong>Tarjetas Bancarias</strong><br><br></a>
                        <a class="btn btn-success" href="#"><br><strong>Dinero en Efectivo</strong><br><br></a>
                        <a class="btn btn-info" href="#"><br><strong>Ticket Funcionarios</strong><br><br></a>
                    </center>
                </div>
            </div>
        </div>
        <div id="footer">

            <?php //require.... ?>
        </div>



    </body>
</html>
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
                    if (prod == 0) {
                        $('#error').html('').html('<div class="alert alert-warning">Error!</div>');
                        $('#barra').select();
                    }//if
                    else
                    {
                        alert(prod);
                        //manejo del Jason!
                        $('#error').html('');
                        var pepe = $('#barra');
                        $(document).ready(function() {
                            pepe.focus();
                        });
                    }//else

                }//success
            });//ajax
        }
        //alert(id);
    });
</script>






