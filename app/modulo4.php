<?php

session_start();
include '../db/conexion.php';

$nombre=  $_SESSION ['nombre'];
$apellidos=  $_SESSION ['apellidos'] ;
$nacimiento=  $_SESSION ['nacimiento'] ;
$usuario = $_SESSION ['usuario'];
$correo =    $_SESSION ['correo'];
$nombre_completo = $nombre.''.$apellidos;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/aplicativo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/450fde0f6e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Capital Prisma</title>
</head>
<body>
    <section id="general">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>

        <div class="center_menu">
                <h1>Calculadora de interés compuestos</h1>
                <hr class="separador">
                    <form class="form-group row">
                    <label for="tiempo_de_ahorro">Capital inicial</label>                    
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form"
                                    src="https://cdn.lordicon.com/qnwzeeae.json"
                                    trigger="loop"
                                    delay= "800"
                                    colors="primary:#c69cf4,secondary:#e88c30"
                                <lord-icon/>
                            </div>
                        </div>
                        <input type="number" name="capital_inical" class="form-control" id="capital_inicial" placeholder="Capital inicial">
                    </div>
            <!--separador de botones-->
            <label for="tiempo_de_ahorro">Tiempo de ahorro </label>
            <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
                                    <lord-icon class="icons_form"
                                        src="https://cdn.lordicon.com/lzgqzxrq.json"
                                        trigger="loop"
                                        colors="primary:#4f1091,secondary:#e5d1fa,tertiary:#8930e8,quaternary:#a866ee"
                                    </lord-icon>
                            </div>
                        </div>
                        <input type="date" name="tiempo_de_ahorro" class="form-control" id="tiempo_de_ahorro" placeholder="Tiempo de ahorro">
                    </div>
            <!--separador de botones-->
            <label for="tiempo_de_ahorro">Tasa de interes</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <lord-icon class="icons_form"
                                    src="https://cdn.lordicon.com/ekgtlsvc.json"
                                    trigger="loop"
                                    colors="primary:#c69cf4,secondary:#4f1091"
                                </lord-icon>
                            </div>
                        </div>
                        <input type="number" name="tasa_de_interes" class="form-control" id="tasa_de_interes" placeholder="Tasa de interes">
                    </div>
            <!--separador de botones-->
                    <button type="submit" class="submit">Calcular</button>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Capital inicial</th>
                            <th scope="col">Tasa de interés</th>
                            <th scope="col">Periodo del ahorro</th>
                            <th scope="col">Capital Final</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>50.000</td>
                                    <td>2.6%</td>
                                    <td>12</td>
                                <th scope="row">42.600</th>
                                </tr>
                            </tbody>
                        </table>
        </div>
       
        <div class="rigth_menu">
            <div class="perfil">
                    <img src="../img/person.png" alt="">
                    <p><?php echo $nombre_completo ?></p>
                    <span><?php echo $correo ?></span>
                </div>
                <hr class="div_separador">
                <div class="ultimas_t">
                    <h2>Ultimos movimientos</h2>
                </div>
            </div>
    </section>

    <script src="../js/component_menu.js"></script>
</body>
</html>