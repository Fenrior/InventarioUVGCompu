<head>
<title>
Datos Personales
</title>
</head>
<meta charset="utf-8">
<body bgcolor="black">
<center>
<div class="container">
  <p><a href="">
    Datos Personales
  </a></p>
<form action="progra.php" class="dpibody" method="post">
  <label for="Nombre del Estudiante">codigo/label>
  <input type="text" name="nombre" value="" required>
  <br>
  <br>
<label for="Código del Estudiante">producto</label>
  <input type="text" name="codigo" value="" required>
  <br>
    <br>
  <input type="submit" name="datos" class="button1" value="Listo">
  </form>
     <br>
    <br> <br>
    <br>
	 <br>
    <br> <br>
</center>
<?php
$nombree=$_POST["nombre"];
$codigoe=$_POST["codigo"];
$conn = mysqli_connect("localhost", "ACortez", "ACortez123", "catalogo");
if (!$conn) 
{
    echo "Error de conexion defectuosa";
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `accesorios` (`nombre`, `codigo`) VALUES ('$nombree', '$codigoe')";
    if (mysqli_query($conn, $sql)) {
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }   
mysqli_close($conn);
?>
</body>
</html>
