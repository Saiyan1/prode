<?php
session_start();
?>

<?php
require_once("conx.php");

$sql = "
    UPDATE partido
    SET resultado = '". $_POST['resultado'] ."'
    WHERE
      equipo_l = " . $_POST['lid'] . "
      AND
      equipo_v = " . $_POST['vid'] . "
      AND
      fecha_numero = " . $_POST['f'] ;


// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

if ($mysqli->query($sql) === TRUE) {
    header("Location: listadoParaRegistrar.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$mysqli->close();
?>