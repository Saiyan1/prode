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
            if (response.status === 'connected') {

                //Datos
                FB.api(
                        "/me",
                        function (response) {
                            if (response && !response.error) {
                                //Foto http://graph.facebook.com/{FB_ID}/?fields=picture
//
                                var usuario = {
                                    fb_id: response.id,
                                    email: response.email,
                                    first_name: response.first_name,
                                    last_name: response.last_name,
                                    name: response.name
                                };


                                $.ajax({
                                    type: "POST",
                                    url: "http://localhost/prodeRest/public/usuarios",
                                    data: JSON.stringify(usuario),
                                    contentType: "application/json; charset=utf-8",
                                    crossDomain: true,
                                    dataType: "json",
                                    success: function (data, status, jqXHR) {
//                                        console.log("Success");
//                                        console.log(data);
                                        window.location = "misTorneos.php";
                                    },

                                    error: function (jqXHR, status) {

                                    }
                                });

                            }
                        }
                );

            }
            else {
                FB.login();
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
        <div class="col-md-4 col-md-offset-4"> <img src="img/logo_transp_800x600.png" alt="Logo Tu Prode" class="img-rounded img-responsive"> </div>
    </div>


    <div class="row">
        <div class="text-center">
            <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="true" data-auto-logout-link="true"></div>

        </div>
    </div>


    <div class="row">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>


    <div class="row">

        <div class="well">
            <p class="lead text-center">Creá torneos con tus amigos!</p>
            <p class="lead text-center">Jugá desde Celular, PC o Tablet!</p>
        </div>

    </div>


</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>