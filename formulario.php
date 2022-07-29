<!doctype html>
<html lang="en">

<head>
  <title>REGISTRO DE USUARIO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/carouselypelis.css">
  <link rel="stylesheet" href="css/piedepagina.css">
  <link rel="stylesheet" href="css/salas.css">
 
</head>
<body>
<header>
    <nav>
          <nav class="navegacion">
            <a href="#"><img class="logo" src="img/logo.png" alt="logo"></a>
            <ul class="menu">
              <li><a href="inicio.php"><i class="fa fa-house" style="font-size:20px;color:rgb(170, 19, 19)"></i> INICIO</a></li>
              <li><a href="cartelera.php"><i class="fa fa-film" style="font-size:20px;color:rgb(170, 19, 19)"></i> CARTELERA</a></li>
              <li><a href="promociones.php"><i class="fa fa-bullhorn" style="font-size:20px;color:rgb(170, 19, 19)"></i> PROMOCIONES</a></li>
              <li><a href="formulario.php"><i class="fas fa-user-circle" style="font-size:20px;color:rgb(170, 19, 19)"></i> REGISTRO</a></li>
              <li><a href="sesion.php"><i class="fas fa-user" style="font-size:20px;color:rgb(170, 19, 19)"></i> INICIAR SESIÓN</a></li>
              <li><a href="reservar.php"><i class="fas fa-donate" style="font-size:20px;color:rgb(170, 19, 19)"></i> RESERVAR</a></li>
                </ul>
              </li>
            </ul>
          </nav>
      </nav>
  </header>
        <center><div class="cartelera"><i class="fa fa-user-circle" style="font-size:60px;color:rgb(170, 19, 19)"></i> <b>REGISTRO USUARIO</b></div></center>
       <br>

      <form name="form1" method="post" action="cine.php" class="form1">
      <center><table width="319" height="82"  style = "font-size:20px"></center>
        <tr>
        <td colspan="2" scope="col"><div align="center" class="Estilo8" style="color:rgb(170, 19, 19)"><h1><b>JIPICINE</b></h1></div></td>
        </tr>
    
        <tr>
        <td colspan="2" scope="col"><div align="justify"><span class="Estilo8" style="color:#FFFF00; margin:2px"><center><h3><b>INGRESE LOS SIGUIENTES DATOS:</b></h3></center></span></div></td>
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>NOMBRES:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="nombres" type="text" id="nombres" size="25" maxlength="30" required="required"></td>         
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>APELLIDOS:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="apellidos" type="text" id="apellidos" size="25" maxlength="30" required="required"></td>          
        </tr>

        <tr>
         <td style="color:black; font-family:cursive"><h4><b>CÉDULA:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="cedula" type="int" id="cedula" size="25" maxlength="10" required="required"></td>
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>FECHA DE NACIMIENTO:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="fecha_nac" type="date" id="fecha_nac" required="required"></td>
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>EDAD:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="edad" type="int" id="edad" size="25" maxlength="4" required="required"></td>
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>SEXO:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="sexo" type="text" id="sexo" size="25" maxlength="30" required="required"></td>         
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>DIRECCIÓN:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="direccion" type="text" id="direccion" size="25" maxlength="30" required="required"></td>         
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>TELÉFONO:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="telefono" type="int" id="telefono" size="25" maxlength="10" required="required"></td>
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>CORREO:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="correo" type="email" id="correo" size="25" maxlength="30" required="required"></td>
        </tr>

        <tr>
        <td style="color:black; font-family:cursive"><h4><b>CONTRASEÑA:</b></h4></td>
          <td><input  style = "margin:5px" class="controls" name="contraseña" type="password" id="contraseña" size="25" maxlength="30" required="required"></td>
        </tr>
         
        <tr>
          
          <td><input class="btn btn-warning" style="color: black; background-color:rgb(170, 19, 19); font-size: 20px; padding:10px; margin:30px" type="submit" name="Submit" value="REGISTRARSE" id="submit"></td>
          <td><input class="btn btn-warning" style="margin: 5px; color: black; background-color:rgb(170, 19, 19); font-size: 20px; padding:10px" type="reset" name="borrar" value="BORRAR" id="submit"></td>
        </tr>
       
      </table>
    </form> 
    <br>
      <br>
      
      <footer>
    <div class="footer-container">
        <div class="footer-content-container">
            <center><h3 class="website-logo"><a href="#"><img class="logo" src="img/logo.png" alt="logo"></a></h3></center>
            <h1><FONT color="white" style="font-family:cursive"><span>jipicine@gmail.com</span></FONT></h1>
        </div>
        <div class="footer-menus">
            <div class="footer-content-container">
                <span class="menu-title"><i class="fas fa-info-circle" style="font-size:30px;color:rgb(170, 19, 19)"></i> INFORMACIÓN</span>
                <a href="inicio.php"class="menu-item-footer">Inicio</a>
                <a href="quienes.php"class="menu-item-footer">¿Quiénes Somos?</a>
                <a href="estamos.php" class="menu-item-footer">¿Dónde Estamos?</a>
            </div>
            <div class="footer-content-container">
                <span class="menu-title"><i class="fas fa-film" style="font-size:30px;color:rgb(170, 19, 19)"></i> JIPICINE</span>
                <a href="cartelera.php" class="menu-item-footer">Cartelera</a>
                <a href="promociones.php" class="menu-item-footer">Promociones</a>
                <a href="formulario.php" class="menu-item-footer">Registro</a>
                <a href="sesion.php" class="menu-item-footer">Iniciar sesión</a>
                <a href="reservar.php" class="menu-item-footer">Reservar</a>
                <a href="peliculas.php" class="menu-item-footer">Registrar peliculas</a>
            </div>
        </div>
        <div class="footer-content-container">
          <span class="menu-title"><i class="fas fa-user-circle" style="font-size:30px;color:rgb(170, 19, 19)"></i> CONTÁCTANOS</span>
            <div class="social-container">
                <a href="https://www.facebook.com/JipiCineEC" class="social-link"></a>
                <a href="https://www.instagram.com/CineJipi_EC" class="social-link"></a>
                <a href="https://twitter.com/CineMax_EC" class="social-link"></a>
            </div>
        </div>
    </div>
    <div class="copyright-container">
        <span class="copyright">Copyright 2022, CineMax.com todos los derechos reservados.</span>
    </div>
</footer>
      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"></script>

    <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="funciones.js/js.js"></script>
    <script src="funciones.js/main.js"></script>

    <script src="https://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
</body>
</html>
