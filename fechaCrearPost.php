<?php
require_once("conx.php");

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }




mysqli_query($conn, "SET AUTOCOMMIT=0");
mysqli_query($conn, "START TRANSACTION");


$q_01 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn1'] . ",
         " . $_POST['l1'] . ",
         " . $_POST['v1'] . ",
        '" . $_POST['f1'] . "'
        )");

$q_02 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn2'] . ",
         " . $_POST['l2'] . ",
         " . $_POST['v2'] . ",
        '" . $_POST['f2'] . "'
        )");

$q_03 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn3'] . ",
         " . $_POST['l3'] . ",
         " . $_POST['v3'] . ",
        '" . $_POST['f3'] . "'
        )");

$q_04 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn4'] . ",
         " . $_POST['l4'] . ",
         " . $_POST['v4'] . ",
        '" . $_POST['f4'] . "'
        )");

$q_05 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn5'] . ",
         " . $_POST['l5'] . ",
         " . $_POST['v5'] . ",
        '" . $_POST['f5'] . "'
        )");

$q_06 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn6'] . ",
         " . $_POST['l6'] . ",
         " . $_POST['v6'] . ",
        '" . $_POST['f6'] . "'
        )");

$q_07 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn7'] . ",
         " . $_POST['l7'] . ",
         " . $_POST['v7'] . ",
        '" . $_POST['f7'] . "'
        )");

$q_08 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn8'] . ",
         " . $_POST['l8'] . ",
         " . $_POST['v8'] . ",
        '" . $_POST['f8'] . "'
        )");

$q_09 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn9'] . ",
         " . $_POST['l9'] . ",
         " . $_POST['v9'] . ",
        '" . $_POST['f9'] . "'
        )");

$q_10 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn10'] . ",
         " . $_POST['l10'] . ",
         " . $_POST['v10'] . ",
        '" . $_POST['f10'] . "'
        )");

$q_11 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn11'] . ",
         " . $_POST['l11'] . ",
         " . $_POST['v11'] . ",
        '" . $_POST['f11'] . "'
        )");

$q_12 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn12'] . ",
         " . $_POST['l12'] . ",
         " . $_POST['v12'] . ",
        '" . $_POST['f12'] . "'
        )");

$q_13 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn13'] . ",
         " . $_POST['l13'] . ",
         " . $_POST['v13'] . ",
        '" . $_POST['f13'] . "'
        )");

$q_14 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn14'] . ",
         " . $_POST['l14'] . ",
         " . $_POST['v14'] . ",
        '" . $_POST['f14'] . "'
        )");

$q_15 = mysqli_query($conn, "INSERT INTO partido ( fecha_numero, equipo_l, equipo_v, fecha_partido )
    VALUES(
         " . $_POST['fn15'] . ",
         " . $_POST['l15'] . ",
         " . $_POST['v15'] . ",
        '" . $_POST['f15'] . "'
        )");


if (    $q_01 && $q_02 && $q_03 && $q_04 && $q_05 && $q_06 &&
        $q_07 && $q_08 && $q_09 && $q_10 && $q_11 && $q_12 &&
        $q_13 && $q_14 && $q_15 ) {
    mysqli_query($conn, "COMMIT");
    print "Almacenado";
} else {
    mysqli_query($conn, "ROLLBACK");
    print "ERROR. NO SE HA ALMACENADO";
}
    $conn->close();
?>