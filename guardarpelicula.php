<?php 

$conn = new mysqli("us-cdbr-east-06.cleardb.net", "bdab25e45be6e1","20f6f0a2","heroku_43d262cc3082ced");

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