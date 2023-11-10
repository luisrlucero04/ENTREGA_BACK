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
    <script src="https://kit.fontawesome.com/450fde0f6e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Capital Prisma</title>
</head>
<body>
    <section id="general">
        <div class="left_menu">
            <menu-main></menu-main> 
        </div>

        <div class="center_menu">
            <div id="modulo1">
                <h1>Planeacion presupuestal del mes</h1>
                <hr class="separador">
                <form class="form-group row">
                    <label for="tiempo_de_ahorro">Mes de planeacion</label>                    
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
                            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
                                    <lord-icon class="icons_form"
                                        src="https://cdn.lordicon.com/yqiuuheo.json"
                                        trigger="loop"
                                        colors="primary:#a866ee,secondary:#ebe6ef"
                                        delay= "800"
                                    </lord-icon>
                            </div>
                        </div>
                        <input type="month" name="mes_plan" class="form-control" id="mes_plan" placeholder="Capital inicial">
                    </div>
            <!--separador de botones-->
            <label for="status">Categoria</label>
            <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
                                <lord-icon class="icons_form"
                                    src="https://cdn.lordicon.com/prgqueup.json"
                                    trigger="loop"
                                    colors="primary:#BBA6D4,secondary:#6c16c7,tertiary:#109121"  
                                </lord-icon>
                            </div>
                        </div>
                        <select class="form-control" name="cat" id="category" required>
                        <option>seleccione una opcion</option>
                        <option value="1">Habilitar</option>
                        <option value="2">Deshabilitar</option>
                        </select>
                        </div>
            <!--separador de botones-->
            <label for="tiempo_de_ahorro">Valor</label>
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
                    <button type="submit" class="submit" name="plan_cat">Guardar</button>
                    </form>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Mes</th>
                            <th scope="col">valor</th>
                            <th scope="col">categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>50.000</td>
                                    <td>2.6%</td>
                                    <td>12</td>
                                </tr>
                            </tbody>
                        </table>
        </div>
            </div>
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