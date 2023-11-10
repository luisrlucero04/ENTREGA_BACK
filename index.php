<?php
  if (isset ($_GET['status'])) {
    if ($_GET ['status'] == 1) {
    echo'<script>alert("registro exitoso");</script>'; 
  }
  if ($_GET ['status']==2){
    echo '<script>alert("El usuario ya existe");</script>'; 

  }
  if ($_GET ['status']==3){
    echo '<script>alert("Usuario no existe (comprueba tu contraseña) ");</script>'; 

  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/450fde0f6e.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>

 <header>
  <div class="logo">
    <img src="img/logo.png" alt="">
  </div>

  <nav role='navigation'>
		<div id="menuToggle">
			<input type="checkbox" />
			<span></span>
			<span></span>
			<span></span>
			<ul id="menu">
				<a href="#servicios">
					<li>Servicios</li>
				</a>
				<a href="#contacto">
					<li>Contact</li>
				</a>
			</ul>
		</div>
	</nav>
 </header>


<!-- Modal de registro -->
<div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-labelledby="register_modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="register_modalLabel">Registro de usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="back/registro.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputnombres">Nombres</label>
              <input type="text" class="form-control" name="names" id="inputnombres" placeholder="Nombre completo" required >
            </div>
            <div class="form-group col-md-6">
              <label for="inputapellidos">Apellidos</label>
              <input type="text" class="form-control" name="lastname" id="inputapellidos" placeholder="Apellidos" required >
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputfechanacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="bdate" id="inputfechanacimiento"  placeholder="Apellidos" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputnro_id">Nro id (usuario)</label>
                <input type="number" class="form-control" name="number_id" id="inputnro_id"  placeholder="Sin puntos" required>
              </div>

            </div>
          </div>
          <div class="form-group">
            <label for="inputcorreo">Correo</label>
            <input type="email" class="form-control" name="email" id="inputcorreo"  placeholder="someone@example.com" required>
          </div>
          <div class="form-group">
            <label for="inputcontraseña">Contraseña</label>
            <input type="password" class="form-control" name="pass" id="inputcontraseña" placeholder="Tan secreta que ni las paredes la pueden saber" required>
          </div>
          <button name="btn_register" type="submit" class="register">Registrate</button>
        </form>
        
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


<!-- Modal de login -->
<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login_modalLabel">Iniciar sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="back/login.php" method="post">
          <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputpass">Numero de identifiacion (usuario) </label>
              <input type="text" class="form-control" name="number_id" id="inputnumber_id" placeholder="Numero de identificacion (sin puntos ni espacios)" required >
            </div>
            <div class="form-group col-md-6">
              <label for="inputpass">Contraseña</label>
              <input type="password" class="form-control" name="pass" id="inputpass" placeholder="Contraseña" required >
            </div>
            </div>
            <button name="login" type="submit" class="login">Ingresa</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>







<div class="contenedoruno">
  <div class="info">
    <h1>
      CAPITAL PRISMA
    </h1>
    <h2>
      Cada centavo cuenta.
    </h2>
    <p>
    Bienvenido a Capital Prisma, tu aliado digital para el control total de tu vida financiera. Nuestra aplicación está diseñada para simplificar la gestión de tus finanzas personales y ayudarte a alcanzar tus metas económicas de manera inteligente y efectiva.
    </p>
    <button class="login" data-toggle="modal" data-target="#login_modal">Ingresa</button>
    <button class="register" type="button" data-toggle="modal" data-target="#register_modal">Registrate</button>
  </div>
  <div class="imageuno">
    <img src="img/mainpage.png" alt="">
  </div>
</div>



<div class="contenedordos" id= servicios>
  <div class="infodos">
    <h3>
      Seguimiento integral de gastos
    </h3>
    <p>
      Registra y categoriza tus gastos diarios de forma rápida y sencilla para entender en qué se va tu dinero y tomar decisiones informadas.
    </p>
  </div>
  <div class="imagedos">
    <img src="img/seguimiento.png" alt="">
  </div>
</div>


<div class="contenedortres">
  <div class="imagetres">
    <img src="img/presupuesto.png" alt="">
  </div>
  <div class="infotres">
    <h4>
      Presupuesto Personalizado
    </h4>
    <h5>
     Crea un presupuesto adaptado a tu estilo de vida y objetivos financieros. Establece límites para cada categoría de gasto y recibe notificaciones cuando estés cerca de excederlos.
  </h5>
  </div>
</div>


<div class="contenedorcuatro">
  <div class="infocuatro">
    <h3>
      Análisis de Ingresos y Gastos
    </h3>
    <p>
      Accede a gráficos y reportes visuales que te mostrarán claramente tus tendencias de gastos e ingresos, brindándote insights valiosos para ajustar tu presupuesto y maximizar tus ahorros.
    </p>
  </div>
  <div class="imagecuatro">
    <img src="img/analisis.png" alt="">
  </div>
</div>


<div class="contenedorcinco">
  <div class="imagecinco">
    <img src="img/seguridad.png" alt="">
  </div>
  <div class="infocinco">
    <h4>
      Seguridad y Privacidad
    </h4>
    <h6>
      Tu seguridad es nuestra prioridad. Tus datos financieros están protegidos con las más avanzadas medidas de seguridad y privacidad.
  </h6>
  </div>
</div>


<footer id="contacto">
  <div class="logo">
    <img src="img/logo.png" alt="">
  </div>

  <div class="contain-main-footer">
    <div class="contacto">
      <h4>
        Datos del contacto:
      </h4>
      <p>
        <i>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final</i>
      </p>
      <div class="social-media">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
        <i class="fa-brands fa-youtube"></i>
      </div>

    </div>
    <div class="normatividad">
      <h4>
        Normatividad:
      </h4>
      <p>
       <i>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final</i>
      </p>
      <h4>
        Normatividad academica: 
      </h4>
      <p>
        <i>Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final</i>
      </p>
    </div>
    <div class="location">
      <h4>Ubicacion:</h4>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.39472692242!2d-74.2726162406684!3d4.648620626821317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1697399887950!5m2!1ses!2sco"

         style="border:0;"
         allowfullscreen="" 
         loading="lazy" 
         referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <div class="copy-rigth">
    <span>© Copyright 2023 | Sitio creado y administrado por Luis Riaño</span>
  </div>
</footer>

</body>
</html>
