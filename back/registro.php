<?php
include '../db/conexion.php';

if (isset($_POST['btn_register'])) {
    $names = $_POST['names'];
    $lastname = $_POST['lastname'];
    $bdate = $_POST['bdate'];
    $number_id = $_POST['number_id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $validacion = mysqli_query($conexion, "SELECT * FROM users WHERE number_id = '$number_id'");        
    $cant = mysqli_num_rows($validacion);  

    if ($cant == 1) {
        header('location:../index.php?status=2');
    } else {
        $sql = mysqli_query($conexion, "INSERT INTO users (names, lastname, bdate, number_id, email, pass) VALUES ('$names', '$lastname', '$bdate', '$number_id', '$email', '$pass')");
        
        if ($sql) {
            header('location:../index.php?status=1');
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
    }
}
?>