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
</head>

<body>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '768260329897744',
            xfbml      : true,
            version    : 'v2.1'
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

                            var fb_id = response.id;
                            $.ajax({
                                type: "GET",
                                url: "http://localhost/prodeRest/public/torneos/usuario/" + fb_id,
                                contentType: "application/json; charset=utf-8",
                                crossDomain: true,
                                dataType: "json",
                                success: function (data, status, jqXHR) {
                                        listaTorneos = data.data;
                                        for (var i = 0, len = listaTorneos.length; i < len; i++) {
                                            $("#listaTorneos").append("<a href='torneo.php?id="+ listaTorneos[i].hash +"' class='list-group-item'>" + listaTorneos[i].name + "</a>");
                                        }
                                },
                                error: function (jqXHR, status) {
//                                    console.log(status);
                                }
                            });

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


<?php require_once("menu.php");?>


<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            &nbsp;
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <button type="button" class="btn btn-danger btn-lg center-block" onclick="location.href = 'torneoCrear.php';">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear Torneo
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
        <div class="list-group">
            <a href="#" class="list-group-item active">
                Mis Torneos
            </a>

            <span id="listaTorneos">

            </span>

        </div>
    </div>




</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>