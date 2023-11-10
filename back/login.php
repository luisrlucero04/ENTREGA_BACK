<?php

include '../db/conexion.php';

    if (isset($_POST['login'])) {
        $id = $_POST ['number_id'];
      $pass = $_POST ['pass'];

      $consulta = mysqli_query ($conexion, "SELECT * FROM users 
                        where number_id= '$id' and pass = '$pass'");
            $exist = mysqli_num_rows ($consulta);
            echo $exist;

        if ($exist == 1) {
            session_start();
            while ($datos= mysqli_fetch_array ($consulta)) {
                $_SESSION ['nombre'] = $datos ['names'];
                $_SESSION ['apellidos'] = $datos ['lastname'];
                $_SESSION ['nacimiento'] = $datos ['bdate'];
                $_SESSION ['usuario'] = $datos ['number_id'];
                $_SESSION ['correo'] = $datos ['email'];
            }
            header ('location:../app/index.php');
        }else{
            header ('location:../index.php?status=3');
        }
    }

?>