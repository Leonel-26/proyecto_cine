<?php 

$conn = new mysqli("us-cdbr-east-06.cleardb.net", "b8fc3d2e95d925","2136d929","heroku_4abf5370e3c00a7");

  $pelicula=$_POST['pelicula'];
  $precio=$_POST['precio'];
  
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO peliculas (pelicula, precio)
  VALUES ('$pelicula', '$precio')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  //mostrar
  
  echo "pelicula:".$pelicula."<br>";
  echo "precio:".$precio."<br>";

?>