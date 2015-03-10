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

    <script>
        function copyToClipboard() {
            window.prompt("Copia y Envia esta pagina a tus amigos:", document.URL);
        }
    </script>
</head>

<body>


<script>

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '768260329897744',
            xfbml      : true,
            version    : 'v2.1'
        });


        function getURLParameter(name) {
            return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
        }


        $( document ).ready(function() {
            $.ajax({
                type: "GET",
                url: "http://localhost/prodeRest/public/torneos/" + getURLParameter("id"),
                contentType: "application/json; charset=utf-8",
                crossDomain: true,
                dataType: "json",
                success: function (data, status, jqXHR) {
                    torneo = data.data;
                    document.title = "Torneo \"" + torneo.name + "\" en Tu Prode";
                    $("#torneoTitulo").html("\"" + torneo.name + "\"");
                },
                error: function (jqXHR, status) {
                                    console.log(status);
                }
            });
        });


        FB.getLoginStatus(function(response) {
            if (response.status !== 'connected') {
                window.location = "index.php";
            }
            else {

                FB.api(
                    "/me",
                    function (response) {
                        if (response && !response.error) {

//                            $.ajax({
//                                type: "GET",
//                                url: "http://localhost/prodeRest/public/torneos/" + getURLParameter("id"),
//                                contentType: "application/json; charset=utf-8",
//                                crossDomain: true,
//                                dataType: "json",
//                                success: function (data, status, jqXHR) {
//                                    torneo = data.data;
//                                    document.title = "Torneo \"" + torneo.name + "\" en Tu Prode";
//                                    $("#torneoTitulo").html("\"" + torneo.name + "\"");
//                                    $("#torneoClave").html(torneo.pass);
//                                },
//                                error: function (jqXHR, status) {
//                                    console.log(status);
//                                }
//                            });

                        }
                    }
                );

            }
        });

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<?php require_once("menu.php"); ?>


<div class="container">


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            &nbsp;
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center" id="torneoTitulo"> Torneo </h2>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <button type="button" class="btn btn-primary btn-lg center-block" onclick="copyToClipboard()">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Invitar Amigo
            </button>

            <p class="lead text-center">Clave: <i id="torneoClave"></i> </p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <button type="button" class="btn btn-danger btn-lg center-block">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Hacer mi jugada
            </button>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="list-group-item active">Posiciones</div>

                <!-- Table -->
                <table class="table table-hover">
                    <tr>
                        <td class="pull-right">1</td>
                        <td><strong>Saiyan1</strong></td>
                        <td class="pull-right"><strong class="font-ok">42</strong></td>
                    </tr>
                    <tr>
                        <td class="pull-right">2</td>
                        <td><strong>Hunter</strong></td>
                        <td class="pull-right"><strong class="font-ok">37</strong></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="list-group-item active">Ganadores por fecha</div>

                <!-- Table -->
                <table class="table">
                    <tr>
                        <td class="pull-right">F1</td>
                        <td><strong>Saiyan1</strong></td>
                        <td class="pull-right"><strong class="font-ok">11</strong></td>
                    </tr>
                    <tr>
                        <td class="pull-right">F2</td>
                        <td><strong>Hunter</strong></td>
                        <td class="pull-right"><strong class="font-ok">23</strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>




</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $("#torneoUrl").val(document.URL);
</script>

</body>
</html>