<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    <script>
        $( document ).ready(function() {
            $.ajax({
                type: "GET",
                url: "http://localhost/prodeRest/public/equipos",
                contentType: "application/json; charset=utf-8",
                crossDomain: true,
                dataType: "json",
                success: function (data, status, jqXHR) {
                    listaEquipos = data.data;
                    for (var i = 0, len = listaEquipos.length; i < len; i++) {
                        $("select").append("<option value="+ listaEquipos[i].id +">" + listaEquipos[i].name + "</option>");
                    }
                },
                error: function (jqXHR, status) {
//                    console.log(status);
                }
            });

            $("#fecha_numero").keyup( function() {
                $(".fecha_numero_val").val( $("#fecha_numero").val() );
            });

        });
    </script>

</head>

<body>


<script>
//    window.fbAsyncInit = function() {
//        FB.init({
//            appId      : '768260329897744',
//            xfbml      : true,
//            version    : 'v2.1'
//        });
//
//
//        FB.getLoginStatus(function(response) {
//            if (response.status === 'connected') {
//
//                Datos
//                FB.api(
//                        "/me",
//                        function (response) {
//                            if (response && !response.error) {
//
//                            }
//                        }
//                );
//
//            }
//            else {
//                FB.login();
//            }
//        });
//
//    };
//
//    (function(d, s, id){
//        var js, fjs = d.getElementsByTagName(s)[0];
//        if (d.getElementById(id)) return;
//        js = d.createElement(s); js.id = id;
//        js.src = "//connect.facebook.net/es_LA/sdk.js";
//        fjs.parentNode.insertBefore(js, fjs);
//    }(document, 'script', 'facebook-jssdk'));
</script>


<?php require_once("menu.php"); ?>


<div class="container main">


    <div class="row">

        <form class="form-inline" method="post" action="fechaCrearPost.php">

            <div class="row">
                <label>Nº Fecha</label>
                <input type="text" class="form-control" id="fecha_numero">
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f1">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn1">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l1">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v1">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f2">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn2">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l2">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v2">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f3">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn3">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l3">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v3">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f4">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn4">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l4">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v4">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f5">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn5">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l5">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v5">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f6">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn6">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l6">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v6">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f7">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn7">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l7">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v7">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f8">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn8">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l8">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v8">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f9">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn9">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l9">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v9">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f10">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn10">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l10">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v10">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f11">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn11">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l11">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v11">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f12">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn12">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l12">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v12">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f13">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn13">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l13">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v13">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f14">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn14">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l14">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v14">
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="datePicker form-control" name="f15">
                    <input type="hidden" class="form-control fecha_numero_val" name="fn15">
                </div>

                <div class="form-group">
                    <label>Local</label>
                    <select class="form-control" name="l15">
                    </select>
                </div>

                <div class="form-group">
                    <label>Visitante</label>
                    <select class="form-control" name="v15">
                    </select>
                </div>
            </div>

            <div class="row">
                <p>&nbsp;</p>
                <button type="submit" class="btn btn-default">Enviar Fecha</button>
            </div>

        </form>

    </div>




</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/bootstrap.min.js"></script>

<!-- JQUERY UI -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- FIN JQUERY UI -->

<script>
    $(function() {
        $( ".datePicker" ).datepicker(
            {
                dateFormat: "yymmdd"
            }
        );
    });
</script>


</body>
</html>