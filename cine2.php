<?php 

$conn = new mysqli("us-cdbr-east-06.cleardb.net", "bdab25e45be6e1","20f6f0a2","heroku_43d262cc3082ced");

$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$cedula = $_POST['cedula'];
$edad = $_POST['edad'];
$ciudad = $_POST['ciudad'];
$pelicula = $_POST['pelicula'];
$fecha_reser= $_POST['fecha_reser'];
$sala = $_POST['sala'];
$asientos = $_POST['asientos'];
$asientosSel= $_POST['asientosSel'];
$precio = $_POST['precio'];
$total= $_POST['total'];
$fpago= $_POST['fpago'];


/* $descuento1= 0;
$descuento2=0;

 $total= (float)$numero11 * (float)$numero10;
  if ($numero11 >= 3)
{
	$descuento1= (float) $total*0.02;
}

if ($numero11 >= 65)
{
	$descuento2= (float) $total*0.50;
}
$tp= (float) $total-($descuento1+$descuento2);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} */

$sql = "INSERT INTO reserva (nombres, apellidos, cedula, edad, ciudad, pelicula, fecha_reser, sala, asientos, asientosSel, precio, total,
fpago)
VALUES ('$nombres','$apellidos','$cedula','$edad','$ciudad','$pelicula','$fecha_reser','$sala','$asientos','$asientosSel','$precio','$total'
,'$fpago')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo registro creado con éxito";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//mostrar

echo "nombres:".$nombres."<br>";
echo "apellidos:".$apellidos."<br>";
echo "cedula". $cedula."<br>";
echo "edad". $edad."<br>";
echo "ciudad". $ciudad."<br>";
echo "pelicula".$pelicula."<br>";
echo "fecha_reser".$fecha_reser."<br>";
echo "sala".$sala."<br>";
echo "asientos".$asientos."<br>";
echo "precio".$precio."<br>";
echo "fpago".$fpago."<br>";
echo "asientosSel".$asientosSel."<br>";
echo "total".$total."<br>";

header('Location: consulta.php')
  
  

?>