<?php 

$conn = new mysqli("us-cdbr-east-06.cleardb.net", "b8fc3d2e95d925","2136d929","heroku_4abf5370e3c00a7");

?>

<!doctype html>
<html lang="en">

<head>
  <title>RESERVAR</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Compiled and minified JavaScript -->
  <link rel="stylesheet" href="https://fontawesome.com/icons/house-chimney?s=duotone">

  <link rel="stylesheet" href="css/carouselypelis.css">
  <link rel="stylesheet" href="css/menu.css">
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
  <center>
    <div class="cartelera"><i class="fa fa-ticket" style="font-size:60px;color:rgb(170, 19, 19)"></i> <b>VENTA DE TICKETS</b></div>
  </center>

  <table border="1" width="200" height="100" class="table table-bordered" >
      <tr>
        <td width="212" height="34">
          <form id="formulario" method="post" action="cine2.php" class="formulario" name="formulario"style = "font-size:15px;padding: 5px; margin-left:100px">

            <fieldset>
              <h4><p><label for="nombres"><b>NOMBRES:</b></label>
              <br>
                <input id="nombres" name="nombres"type="text" />
              </p>
             </h4>
              <p><label for="apellidos"><b>APELLIDOS:</b></label>
              <br>
                <input id="apellidos" name="apellidos"  type="text" />
              </p>
              <p><label for="cedula"><b>CÉDULA:</b></label>
              <br>
                <input id="cedula" name="cedula" type="int" />
              </p>
              <p><label for="edad"><b>EDAD:</b></label>
              <br>
                <input id="edad" name="edad" type="int" />
              </p>

              <label action><b>CIUDAD:</b></label>
              <br>
              <select name="ciudad" id="ciudad">
                <option value="seleccione">SELECCIONE</option>
                <option value="Jipijapa">JIPIJAPA</option>
                <option value="Chone">CHONE</option>
                <option value="Guayaquil">GUAYAQUIL</option>
              </select>
              <br>
              <br>
              <label action><b>NOMBRE DE LA PELÍCULA:</b></label>
              <br>
              
              <select name="pelicula" id="pelicula">
               <?php 
              if (!$conn)
              {
                 die("Conexion fallida: " . mysqli_connect_error());
              }
              
              $sql = "SELECT * FROM peliculas";
              $result = mysqli_query($conn, $sql);
              ?>

             <option disabled selected value="">SELECCIONAR...</! -->

             <?php
              while ($ver = mysqli_fetch_assoc($result))
              {
                 ?>
                 <option onclick="precio('<?=$ver["precio"]?>')" value="<?=$ver["pelicula"]?>">
                    <?= $ver["pelicula"]?> 
                 </option>
                 <?php
              }
           ?>
           </select>
              <br>
              <br>
              <p><label for="fecha_reser"><b>FECHA DE LA RESERVA:</b></label>
              <br>
                <input id="fecha_reser" name="fecha_reser" type="date" />
              </p>
              <label action><b>SALA:</b></label>
              <br>
              <select name="sala" id="sala">
                <br>
                <option value="seleccione">CATEGORÍA SALA:</option>
                <option value="Normal">SALA NORMAL</option>
                <option value="VIP">SALA VIP</option>
              </select>
              <br>
              <br>
              <p><label for="asientos"><b>Nº ASIENTOS:</b></label>
              <br>
                <input id="asientos" name="asientos" type="text" readonly />
              </p>

              <p><label for="asientosSel"><b>ASIENTOS SELECCIONADOS:</b></label>
              <br>
                <input id="asientosSel" name="asientosSel" type="text" readonly />
              </p>



              <p><label for="precio"><b>PRECIO DE LA PELÍCULA:</b></label>
              <br>
                <input id="precio" name="precio" type="text" readonly/>
              </p>
              <p><label for="total"><b>TOTAL:</b></label>
              <br>
                <input id="total" name="total" type="text" readonly />
              </p>

              <label action><b>FORMA DE PAGO:</b></label>
              <br>
              <select name="fpago" id="fpago">
                <option value="seleccione">SELECCIONE</option>
                <option value="Debito">DÉBITO O CRÉDITO</option>
                <option value="Transferencia">TRANSFERENCIA</option>
              </select>
              <br> 
              <input class="btn btn-warning" style="color: white; background-color:rgb(170, 19, 19); font-size: 20px; padding: 5px; margin:30px" type="submit" name="pagar" value="PAGAR" id="pagar">
              <a href="consulta.php" class="btnA">CONSULTAR</a>
              <input class="btn btn-warning" style="color: white; background-color:black; font-size: 20px; padding: 5px; margin:30px" type="reset" name="borrar" value="BORRAR" id="borrar">
            </fieldset>
          </form>
        </td>
        <td width="700" style = "font-size:30px;padding: 5px; margin-left:100px; font-family:cursive"> <center><img src="img/logo.png" width="300" height="200" alt="100"></center>
        </center>
      <center>
      <div>
        <input type="button" value="A1" class="btn btn-primary" onclick="alerta('A1');">
        <input type="button" value="A2" class="btn btn-danger" onclick="alerta('A2');" >
        <input type="button" value="A3" class="btn btn-danger" onclick="alerta('A3');">
        <input type="button" value="A4" class="btn btn-danger" onclick="alerta('A4');">
        <input type="button" value="A5" class="btn btn-danger" onclick="alerta('A5');">
        <input type="button" value="A6" class="btn btn-danger" onclick="alerta('A6');" >
        <input type="button" value="A7" class="btn btn-danger" onclick="alerta('A7');">
        <input type="button" value="A8" class="btn btn-danger" onclick="alerta('A8');" >
              
      </div>
     <form>
       <input type="button" value="B1" class="btn btn-primary" onclick="alerta('B1');">
       <input type="button" value="B2" class="btn btn-danger" onclick="alerta('B2');">
       <input type="button" value="B3" class="btn btn-danger" onclick="alerta('B3');">
       <input type="button" value="B4" class="btn btn-danger" onclick="alerta('B4');">
       <input type="button" value="B5" class="btn btn-danger" onclick="alerta('B5');" >
       <input type="button" value="B6" class="btn btn-danger" onclick="alerta('B6');" >
       <input type="button" value="B7" class="btn btn-danger" onclick="alerta('B7');">
       <input type="button" value="B8" class="btn btn-danger" onclick="alerta('B8');">
     </form>
       <form>
         <input type="button" value="C1" class="btn btn-primary" onclick="alerta('C1');" >
         <input type="button" value="C2" class="btn btn-danger" onclick="alerta('C2');">
         <input type="button" value="C3" class="btn btn-danger" onclick="alerta('C3');" >
         <input type="button" value="C4" class="btn btn-danger" onclick="alerta('C4');">
         <input type="button" value="C5" class="btn btn-danger" onclick="alerta('C5');">
         <input type="button" value="C6" class="btn btn-danger" onclick="alerta('C6');" >
         <input type="button" value="C7" class="btn btn-danger" onclick="alerta('C7');">
         <input type="button" value="C8" class="btn btn-danger"onclick="alerta('C8');" >
     </form>
     <form>
       <input type="button" value="D1" class="btn btn-primary" onclick="alerta('D1');" >
       <input type="button" value="D2" class="btn btn-danger" onclick="alerta('D2');" >
       <input type="button" value="D3" class="btn btn-danger" onclick="alerta('D3');" >
       <input type="button" value="D4" class="btn btn-danger" onclick="alerta('D4');" >
       <input type="button" value="D5" class="btn btn-danger" onclick="alerta('D5');" >
       <input type="button" value="D6" class="btn btn-danger"onclick="alerta('D6');"  >
       <input type="button" value="D7" class="btn btn-danger"onclick="alerta('D7');"  >
       <input type="button" value="D8" class="btn btn-danger"onclick="alerta('D8');"  >
       
     </form>
     <form>
      <input type="button" value="E1" class="btn btn-primary" onclick="alerta('E1');"  >
      <input type="button" value="E2" class="btn btn-danger" onclick="alerta('E2');" >
      <input type="button" value="E3" class="btn btn-danger" onclick="alerta('E3');"  >
      <input type="button" value="E4" class="btn btn-danger" onclick="alerta('E4');" >
      <input type="button" value="E5" class="btn btn-danger" onclick="alerta('E5');" >
      <input type="button" value="E6" class="btn btn-danger" onclick="alerta('E6');"  >
      <input type="button" value="E7" class="btn btn-danger" onclick="alerta('E7');" >
      <input type="button" value="E8" class="btn btn-danger" onclick="alerta('E8');" >
    </form>
    <form>
      <input type="button" value="F1" class="btn btn-primary" onclick="alerta('F1');"  >
      <input type="button" value="F2" class="btn btn-danger" onclick="alerta('F2');" >
      <input type="button" value="F3" class="btn btn-danger" onclick="alerta('F3');"  >
      <input type="button" value="F4" class="btn btn-danger" onclick="alerta('F4');" >
      <input type="button" value="F5" class="btn btn-danger" onclick="alerta('F5');" >
      <input type="button" value="F6" class="btn btn-danger" onclick="alerta('F6');"  >
      <input type="button" value="F7" class="btn btn-danger" onclick="alerta('F7');" >
      <input type="button" value="F8" class="btn btn-danger" onclick="alerta('F8');" >
      <input type="button" value="F9" class="btn btn-danger" onclick="alerta('F9');" >
    </form>
    <form>
      <input type="button" value="G1" class="btn btn-primary" onclick="alerta('G1');"  >
      <input type="button" value="G2" class="btn btn-danger" onclick="alerta('G2');" >
      <input type="button" value="G3" class="btn btn-danger" onclick="alerta('G3');"  >
      <input type="button" value="G4" class="btn btn-danger" onclick="alerta('G4');" >
      <input type="button" value="G5" class="btn btn-danger" onclick="alerta('G5');" >
      <input type="button" value="G6" class="btn btn-danger" onclick="alerta('G6');"  >
      <input type="button" value="G7" class="btn btn-danger" onclick="alerta('G7');" >
      <input type="button" value="G8" class="btn btn-danger" onclick="alerta('G8');" >
      <input type="button" value="G9" class="btn btn-danger" onclick="alerta('G9');" >
      <input type="button" value="G10" class="btn btn-danger" onclick="alerta('G10');" >
    </form>
    <form>
      <input type="button" value="H1" class="btn btn-primary" onclick="alerta('H1');"  >
      <input type="button" value="H2" class="btn btn-danger" onclick="alerta('H2');" >
      <input type="button" value="H3" class="btn btn-danger" onclick="alerta('H3');"  >
      <input type="button" value="H4" class="btn btn-danger" onclick="alerta('H4');" >
      <input type="button" value="H5" class="btn btn-danger" onclick="alerta('H5');" >
      <input type="button" value="H6" class="btn btn-danger" onclick="alerta('H6');"  >
      <input type="button" value="H7" class="btn btn-danger" onclick="alerta('H7');" >
      <input type="button" value="H8" class="btn btn-danger" onclick="alerta('H8');" >
      <input type="button" value="H9" class="btn btn-danger" onclick="alerta('H9');" >
      <input type="button" value="H10" class="btn btn-danger" onclick="alerta('H10');" >
      <input type="button" value="H11" class="btn btn-danger" onclick="alerta('H11');" >
    </form>
    </center>
  </tr>
  </table>
</center>
  <br>
  <br>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  -->
  <script src="funciones.js/js.js"></script>
  <script src="funciones.js/main.js"></script>
  <script src="funciones.js/script.js"></script>

  <script src="https://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
  <script>
    let num=0;
    
   function alerta(val) {
    alert("seleccionado: " + val) 
    $("#asientos").val(++num)
    all= $("#asientosSel").val()
    if (num == 1) {
      $("#asientosSel").val(val)
    } else {
      $("#asientosSel").val(all + ", " + val)
    }
  }

  function precio(pel) {
    let desA = 0, desE = 0;
    asi= $("#asientos").val()
    edad= $("#edad").val()
    $("#precio").val(pel)
    if ((asi == '') ||( edad == '')) {
      alert("Campos Vacíos...");      
    } else {
      pt= pel * asi;
      if (asi >= 3) {
        desA = pt * 0.02;
      }
      if (edad >= 65) {
        desE = pt * 0.5;
      }
      pt = pt - (desA + desE);
      $("#total").val(parseFloat(pt).toFixed(2))
    }
    }

    $('#edad').change(e => {
      edad = $('#edad').val()
      if (edad >= 65) {
        alert('Recibe descuento del 50%')
      }
    })

  </script>
</body>
</html>