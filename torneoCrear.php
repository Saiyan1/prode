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

        var fb_id = "";

        FB.getLoginStatus(function(response) {
            if (response.status !== 'connected') {
                window.location = "index.php";
            }
            else {
                FB.api(
                        "/me",
                        function (response) {
                            if (response && !response.error) {
                                $("#fb_id").val(response.id);
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
            <h2>Crear Torneo</h2>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p>&nbsp;</p>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form id="torneoForm" method="post" action="">

                <input type="hidden" name="user_id" id="user_id" value="999"/>
                <input type="hidden" name="fb_id"   id="fb_id" value=""/>

                <div class="form-group">
                    <label for="name">Nombre Torneo</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de Torneo">
                </div>
                <div class="form-group">
                    <label for="pass">Clave del torneo <i>(para pasar SOLO a tus amigos)</i></label>
                    <input type="text" class="form-control" id="pass" name="pass" readonly>
                </div>
                <button type="submit" class="btn btn-lg btn-danger">Crear Torneo</button>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>


    <div class="row">
        <div class="well">
            <p class="lead text-center">Crea un torneo de prode para jugar con tus amigos.</p>
        </div>
    </div>


</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/notify.min.js"></script>

<!-- FormValidation CSS file -->
<link rel="stylesheet" href="vendor/formvalidation/dist/css/formValidation.min.css">
<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="vendor/formvalidation/dist/js/formValidation.min.js"></script>
<script src="vendor/formvalidation/dist/js/framework/bootstrap.min.js"></script>
<!-- FormValidation plugin lang -->
<script type="text/javascript" src="vendor/formvalidation/dist/js/language/es_ES.js"></script>

<script>

    function randomIntFromInterval(min,max) {
        return Math.floor(Math.random()*(max-min+1)+min);
    }

    $( document ).ready(function() {
        $("#pass").val(randomIntFromInterval(1000,9999));


        $('#torneoForm')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        name: {
                            validators: {
                                notEmpty: {
        //                            message: 'The name is required'
                                },
                                stringLength: {
                                    min: 1,
                                    max: 100
        //                            message: 'The name must be more than 6 and less than 30 characters long'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9_ -]+$/
        //                            message: 'The username can only consist of alphabetical, number and underscore'
                                }
                            }
                        }
                    }
                })

                .on('success.form.fv', function(e) {
                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the FormValidation instance
                    var bv = $form.data('formValidation');

                    // Use Ajax to submit form data
                    $.post(
                            'http://localhost/prodeRest/public/torneos',
                            $form.serialize(),
                            function(result) {
//                                console.log(result);
//                                alert(result);
//                                var id = result['data']['id'];
                                window.location = "torneo.php?id=" + result.data.hash;
                            }
                    );
                });
    });



</script>

</body>
</html>