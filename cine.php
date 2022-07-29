<?php 

$conn = new mysqli("us-cdbr-east-06.cleardb.net", "b8fc3d2e95d925","2136d929","heroku_4abf5370e3c00a7");

  $numero1=$_POST['nombres'];
  $numero2=$_POST['apellidos'];
  $numero3=$_POST['cedula'];
  $numero4=$_POST['fecha_nac'];
  $numero5=$_POST['edad'];
  $numero6=$_POST['sexo'];
  $numero7=$_POST['direccion'];
  $numero8=$_POST['telefono'];
  $numero9=$_POST['correo'];
  $numero10=$_POST['contraseña'];
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO registro (nombres, apellidos, cedula, fecha_nac, edad, sexo, direccion, telefono, correo, contraseña)
  VALUES ('$numero1','$numero2','$numero3','$numero4','$numero5','$numero6','$numero7','$numero8','$numero9','$numero10')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con éxito";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  //mostrar
  
  echo "nombres:".$numero1."<br>";
  echo "apellidos:".$numero2."<br>";
  echo "cedula". $numero3."<br>";
  echo "fecha_nac". $numero4."<br>";
  echo "edad". $numero5."<br>";
  echo "sexo". $numero6."<br>";
  echo "direccion".$numero7."<br>";
  echo "telefono".$numero8."<br>";
  echo "correo".$numero9."<br>";
  echo "contraseña".$numero10."<br>";

?>