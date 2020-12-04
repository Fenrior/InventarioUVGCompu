<html>
<head>
<meta lang="es">
<meta charset="UTF-8">
<title>
Inventario UVG
</title>
<style>
table#t12
{
  width:100%;
  background-color:#ffffff;
  font-family: arial, sans-serif;
  font-size: 30px;
  border-collapse: collapse;
  width: 100%;
  color:white;
  text-align: center;
  background-color: #e2ebef;
color: #34484E;
font-family: “Trebuchet MS”, Arial;
border-right-width: 1px;
border-bottom-width: 1px;
border-right-style: solid;
border-bottom-style: solid;
border-right-color: #2ECC71;
border-bottom-color: #A4C4D0;
}
table {
  font-family: arial, sans-serif;
  font-size: 30px;
  border-collapse: collapse;
  width: 100%;
  color:white;
  text-align: center;
  background-color: #e2ebef;
color: #34484E;
font-family: “Trebuchet MS”, Arial;
border-right-width: 1px;
border-bottom-width: 1px;
border-right-style: solid;
border-bottom-style: solid;
border-right-color: #2ECC71;
border-bottom-color: #A4C4D0;
}

td, th {
  border: 6px solid #2ECC71;
  padding: 7px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
  text-align: center;
}
label{
width: 305px;
display: inline-block;
font-family:Verdana,Helvetica;
font-size:25px;
   color:white;
}
.button1{
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #1FCF4F; -webkit-box-shadow: 0 0 3px #1FCF4F; }
  50% { background-color: #23DD56; -webkit-box-shadow: 0 0 40px #23DD56; }
  100% { background-color: #1FCF4F; -webkit-box-shadow: 0 0 3px #1FCF4F; }
}

@-moz-keyframes glowing {
  0% { background-color: #1FCF4F; -moz-box-shadow: 0 0 3px #1FCF4F; }
  50% { background-color: #23DD56; -moz-box-shadow: 0 0 40px #23DD56; }
  100% { background-color: #1FCF4F; -moz-box-shadow: 0 0 3px #1FCF4F; }
}

@-o-keyframes glowing {
  0% { background-color: #1FCF4F; box-shadow: 0 0 3px #1FCF4F; }
  50% { background-color: #23DD56; box-shadow: 0 0 40px #23DD56; }
  100% { background-color: #1FCF4F; box-shadow: 0 0 3px #1FCF4F; }
}

@keyframes glowing {
  0% { background-color: #1FCF4F; box-shadow: 0 0 3px #1FCF4F; }
  50% { background-color: #23DD56; box-shadow: 0 0 40px #23DD56; }
  100% { background-color: #1FCF4F; box-shadow: 0 0 3px #1FCF4F; }
}
@font-face {
  font-family: 'Monoton';
  font-style: normal;
  font-weight: 400;
  src: local('Monoton'), local('Monoton-Regular'), url(http://themes.googleusercontent.com/static/fonts/monoton/v4/AKI-lyzyNHXByGHeOcds_w.woff) format('woff');
}

@font-face {
  font-family: 'Iceland';
  font-style: normal;
  font-weight: 400;
  src: local('Iceland'), local('Iceland-Regular'), url(http://themes.googleusercontent.com/static/fonts/iceland/v3/F6LYTZLHrG9BNYXRjU7RSw.woff) format('woff');
}
body{
  background-color: #222222;
}
/*neon effect*/
p{
  text-align:center;
  font-size:7em;
  margin:20px 0 20px 0;
}

a{
  text-decoration:none;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
}
p:nth-child(1) a{
  font-size:1.5em;
  color:#00b347;
  font-family:Iceland;
}
p:nth-child(1) a:hover{
  -webkit-animation: neon2 1.5s ease-in-out infinite alternate;
  -moz-animation: neon2 1.5s ease-in-out infinite alternate;
  animation: neon2 1.5s ease-in-out infinite alternate;
}
p a:hover{
color:#ffffff;
}
/*glow for webkit-ket-frames*/
@-webkit-keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #00b347,
               0 0 70px  #00b347,
               0 0 80px  #00b347,
               0 0 100px #00b347,
               0 0 150px #00b347;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #00b347,
               0 0 35px #00b347,
               0 0 40px #00b347,
               0 0 50px #00b347,
               0 0 75px #00b347;
  }
}



/*glow for mozilla-keyframes*/


@-moz-keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #00b347,
               0 0 70px  #00b347,
               0 0 80px  #00b347,
               0 0 100px #00b347,
               0 0 150px #00b347;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #00b347,
               0 0 35px #00b347,
               0 0 40px #00b347,
               0 0 50px #00b347,
               0 0 75px #00b347;
  }
}


/*glow*/


@keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #00b347,
               0 0 70px  #00b347,
               0 0 80px  #00b347,
               0 0 100px #00b347,
               0 0 150px #00b347;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #00b347,
               0 0 35px #00b347,
               0 0 40px #00b347,
               0 0 50px #00b347,
               0 0 75px #00b347;
  }

}
.borde {
   background-color: #ffffff;
   border: 0;
 }
 .color {
   background-color: #15bd00;
 }
 .roro {
   outline: none;
   background-color: #15bd00;
   border: 0;
 }
   .boton{
        font-size:80px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:black;
        background:#15bd00;
        border:0px;
        width:500px;
        height:120px;
       }
	   .roto{
	            color:gray;
 width:600px;
        height:20px;
		        font-family:Verdana,Helvetica;
				        font-size:50px;
	   }
</style>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "inventariocc");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
<div class="container">
  <p><a href="">
    Dar de baja o alta
  </a></p>
  <center>
<font color="black">
<h2 class="roto">&iquest;Qu&eacute; desea hacer?</h2>
<form action="archivo6.php" method="post" enctype="multipart/form-data">
  <br>
  <table border='1' id='t12'>
  <tr>
       <td>Nombre</td>
       <td>Codigo Comercial</td>
       <td>Cantidad</td>
       <td>Imagen</td>
  </tr>
  <td><input type="text" name="nombre" value="" ></td>
       <td><input type="text" name="comercial" value="" ></td>
       <td><input type="text" name="cantidad" value="" ></td>
       <td><input type="file" name="imagen" size="20"></td>
  </tr>
  <table>
  <br>
  <input type="submit" name="agregart" class="button1" value="Agregar articulo">
  <br>
  <br>
  <label for="codigo del artículo">Codigo del Articulo</label>
  <input type="text" name="codigo" value="">
  <br>
  <label for="codigo del artículo">Cantidad de Articulos</label>
  <input type="text" name="numero" value="">
  <br>
  <br>
  <input type="submit" name="quitart" class="button1" value="Dar de baja">
  <br>
  <br>
  <input type="submit" name="agregar" class="button1" value="Agregar cantidad de articulos existentes">
  <br>
  <br>
  <input type="submit" name="quitar" class="button1" value="Dar de baja cantidad de articulos existentes">
</form> 
</center>
</div>
<?php 
error_reporting(0);
$codigo=$_POST["codigo"];
$cantidade=$_POST["numero"];
if($_POST["agregar"])
{
    $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` =$codigo";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row2 = $result2->fetch_assoc())
        {
          $cantidad=$row2["cantidad"];
        }
    }
    $cantidadf=$cantidad+$cantidade;
          $sql = "UPDATE `inventario` SET `cantidad` = $cantidadf WHERE `codigo` =$codigo";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
if($_POST["quitar"])
{
    $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` =$codigo";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row2 = $result2->fetch_assoc())
        {
          $cantidad=$row2["cantidad"];
        }
    }
    if($cantidad>=$cantidade)
    {
    $cantidadf=$cantidad-$cantidade;
          $sql = "UPDATE `inventario` SET `cantidad` = $cantidadf WHERE `codigo` =$codigo";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
}
if($_POST["quitart"])
{
      $sql="DELETE FROM `inventario` WHERE `codigo`=$codigo";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if($_POST["agregart"])
{
$nombre=$_POST["nombre"];
$comercial=$_POST["comercial"];
$cantidad=$_POST["cantidad"];
$nombrei=$_FILES['imagen']['name'];
$tipoi=$_FILES['imagen']['type'];
$tamagnoi=$_FILES['imagen']['size'];
if($tamagnoi<=10000000)
{   
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/uploads';
    move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombrei);
}
else
{
 echo("el tamagno es demasiado grande");
}
mysqli_select_db($conn,"inventariocc") or die("No se encuentra la base de datos");
mysqli_set_charset($conn,"utf8");
$archivo=fopen($carpeta_destino.$nombrei,"r");
$contenido=fread($archivo,$tamagnoi);
$contenido=addslashes($contenido);
fclose($archivo);
$sql="SELECT * FROM `inventario` ORDER BY `codigo` DESC LIMIT 1";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows > 0)
       {
      while($mostrar=mysqli_fetch_array($result))
      {
        $codigop=$mostrar['codigo'];
      }
    }
      $codigo=$codigop+1;
      $codigof="0".$codigo;
      $sql="INSERT INTO `inventario`(`codigo`, `nombre`, `comercial`, `cantidad`) VALUES ('$codigof','$nombre','$comercial',$cantidad)";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql="UPDATE `inventario` SET `imagen` = '$contenido' WHERE `codigo` = '$codigof'";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    mysqli_close($conn);
}
mysqli_close($conn);
?>
<br><br>
<form action="index.php" class="dpibody" method="post">
<label for="regreso">Regresar a la página principal</label>
  <br>
    <br>
  <button type="submit" class="button1">Back home</button>
</form> 
</body>
</html>