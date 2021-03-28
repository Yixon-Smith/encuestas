<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Favicon - FIS -->
  <link rel="shortcut icon" href="imagenes/favicon.png">

  <!-- My Styles -->
  <link rel="stylesheet" href="css/registro.css">

  <title>Encuestas Venezuela</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Encuestas Venezuela</a>
    <!--
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      -->

    <!--NAVBAR-->
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
        <!--
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
          </li>
          -->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <!--
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          -->
        <!--
          <a class="btn btn-primary" href="login.html" role="button">Ingresar</a>
          -->
      </form>
    </div>
  </nav>

  <!-- Registrarse -->
  <div class="container">

    <div class="card cards-container">
      <h1>Registrarse</h1>

      <form class="form-signin" action="registro.php" method="post">     
		  
		  <span id="reauth-email" class="reauth-email"></span>


        <div class="fila-arriba">
          <img id="profile-img" class="profile-img-card" class="imgregistro" src="imagenes/estadistica.svg" />
		  <p id="profile-name" class="profile-name-card"></p>
			
			
          <br><input type="text" id="" class="form-control" placeholder="Cedula" required autofocus name="id_usuario">
          <br><input type="text" id="" class="form-control" placeholder="Nombre" required autofocus name="nombres">
          <br><input type="text" id="" class="form-control" placeholder="Apellido" required autofocus name="apellidos">
          <br><input type="text" id="" class="form-control" placeholder="Correo" required autofocus name="email">
          <br><input type="text" id="" class="form-control" placeholder="Contraseña" required autofocus name="clave">
          <br><input type="hidden" id="" class="form-control" value="2" required autofocus name="id_tipo_usuario">

        </div>

        <br><button class="botonregistro" type="submit">Registrar</button>
      </form>
    </div>
  </div>


  <!-- Footer -->
  <footer class="page-footer font-small" style="background-color: #343A40; color: #FFF; margin-top: 150px">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">©2021 Todos los derechos reservados
      <br>
      <a href="" target="_blank">Encuesta Venezuela</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/registro.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>