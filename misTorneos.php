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


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Prode</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Mis Torneos</a></li>
                <li><a href="#about">Crear Torneo</a></li>
                <li><a href="#contact">Mi Perfil</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <?php
    $torneos_url = "http://localhost/prodeRest/public/torneos";
    $json = file_get_contents( $torneos_url );
    $obj = json_decode($json)->data;
    if (!$obj) {
        echo "<h2 align='center'>Ha ocurrido un error</h2>";
        die();
    } else {
//        var_dump($obj);
    }
    ?>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            &nbsp;
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <button type="button" class="btn btn-danger btn-lg center-block" onclick="location.href = 'torneoCrear.html';">
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

            <?php foreach($obj as $torneo) { ?>
                <a href="torneo.php?id=<?php echo $torneo->id;?>" class="list-group-item"><?php echo $torneo->name;?></a>
            <?php } ?>

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