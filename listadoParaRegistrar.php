<?php
session_start();
?>

<?php
require_once("conx.php");

$listaPartidosQuery = "
    SELECT p.fecha_numero fechaNumero, el.nombre localNombre, ev.nombre visitanteNombre, el.id lid, ev.id vid
    FROM partido p
    INNER JOIN equipo el ON p.equipo_l = el.id
    INNER JOIN equipo ev ON p.equipo_v = ev.id
    WHERE resultado IS NULL
    ORDER BY fecha_numero ASC
    ";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
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

<?php require_once("menu.php"); ?>


    <div class="container main">

        <div class="row">
            <div class="table-responsive">

                <?php
                if ($resultado = $mysqli->query( $listaPartidosQuery )) {

                    echo "<table class='table table-bordered' >";
                    if ($resultado->num_rows > 0) {
                        while($row = $resultado->fetch_assoc()) {
                            echo( "<tr>" );
                            echo( "<td>" );
                            echo( $row["fechaNumero"] );
                            echo( "</td>" );
                            echo( "<td>" );
                            echo( $row["localNombre"] . " vs " . $row["visitanteNombre"] );
                            echo( "</td>" );
                            echo( "<td>" );
                            echo( "<a href='fechaParaRegistrar.php?l=". $row['lid'] ."&v=". $row['vid'] ."&f=". $row["fechaNumero"] ."'> REGISTRAR </a>" );
                            echo( "</td>" );
                            echo( "</tr>" );
                        }
                    } else {
                        echo "Sin resultados";
                    }

                    echo "</table>";

                    $resultado->close();
                }
                ?>

            </div>
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