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
            <div id="modulo2"><h1>Registro de ingresos y gastos</h1></div>
            <hr class="separador">
            <div class="registro_ingresos">
            <h2>Reportar gasto</h2>
                    <form class="form-group row">
                                <!--separador de botones-->
            <label for="status">categoria</label>
            <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form"
                                    src="https://cdn.lordicon.com/szxtmbzc.json"
                                    trigger="loop"
                                </lord-icon>
                            </div>
                        </div>
                        <select class="form-control" name="cat" id="cat" required>
                        <option>seleccione una opcion</option>
                        </select>
                        </div>
                    
                    <label for="Name_category">Valor</label>                    
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form"
                                    src="https://cdn.lordicon.com/hifghmba.json"
                                    trigger="loop"
                                </lord-icon>
                            </div>
                        </div>
                        <input type="number" name="valor_cat" class="form-control" id="valor_cat" placeholder="Nombre de la categoria">
                    </div>

                    <button type="submit" class="submit" name="add_category">Guardar</button>
                    </form>

                    <h2>Reportar Ingreso</h2>
                    <form class="form-group row">
                                <!--separador de botones-->
            <label for="status">categoria</label>
            <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form"
                                    src="https://cdn.lordicon.com/szxtmbzc.json"
                                    trigger="loop"
                                </lord-icon>
                            </div>
                        </div>
                        <select class="form-control" name="cat" id="cat" required>
                        <option>seleccione una opcion</option>
                        </select>
                        </div>
                    
                    <label for="Name_category">Valor</label>                    
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form"
                                    src="https://cdn.lordicon.com/hifghmba.json"
                                    trigger="loop"
                                </lord-icon>
                            </div>
                        </div>
                        <input type="number" name="valor_cat" class="form-control" id="valor_cat" placeholder="Nombre de la categoria">
                    </div>
                    <button type="submit" class="submit" name="add_category">Guardar</button>
                    </form>
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