<?php 

$conn = new mysqli("us-cdbr-east-06.cleardb.net", "b8fc3d2e95d925","2136d929","heroku_4abf5370e3c00a7");

  $numero1=$_POST['correo'];
  $numero2=$_POST['contraseña'];
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO sesion (correo, contraseña)
  VALUES ('$numero1','$numero2')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con éxito";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  //mostrar
  
  echo "correo".$numero1."<br>";
  echo "contraseña".$numero2."<br>";

?>