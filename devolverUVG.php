<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' >
<meta charset="UTF-8">
<meta lang="es">
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
label{
width: 305px;
display: inline-block;
font-family:Verdana,Helvetica;
font-size:25px;
   color:white;
}

   .boton{
        font-size:20px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:black;
        background:#15bd00;
        border:0px;
        width:200px;
        height:40px;
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
  body {
  background: black;
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
.gogo
{
width:100%;	
font-size:80px;
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
</style>
<title>
Devolver Artículos
</title>
</head>
<body bgcolor="black">
<div class="container">
  <p class="gogo"><a href="">
    Devolver por Cod. Estudiante
  </a></p>
<center><u><h1>
<font color="white">
</u></center></h1>
<center>
<form action="devolverUVG.php" class="dpibody" method="post" name="f1" id="f1">
    <label for="Código del Estudiante">Código del estudiante</label>
<br>
 <br>
  <input type="text" name="codigo" value="">
  <br>
   <br>
  <input type="submit" class="button1" name="buscar" value="Buscar">
  <br>
  <br>
    <label for="Código del artículo a devolver">Código del artículo a devolver o aplazar</label>
<br>
  <input type="text" name="codigoa" value="">
  <br>
  <label for="Código del artículo a devolver">Cantidad de articulos a devolver o aplazar</label>
<br>
  <input type="text" name="cant" value="">
  <br>
  <label for="Código del artículo a devolver">Días a aplazar</label>
<br>
  <input type="text" name="dias" value="">
  <br>
  <br>
  <input type="submit" class="button1" name="devolver" value="Devolver Uno">
  <br>
  <br>
  <input type="submit" class="button1" name="devolvert" value="Devolver Todo">
  <br>
  <br>
  <input type="submit" class="button1" name="devolverc" value="Devolver Cantidad de Articulos">
  <br>
  <br>
  <input type="submit" class="button1" name="aplazar" value="Aplazar">
</form> 
<?php 
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "inventariocc");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$codigoa=$_POST["codigoa"];
echo("<script>
document.f1.codigoa.value = $codigoa
</script>");
$codigoe=$_POST["codigo"];
echo("<script>
document.f1.codigo.value = $codigoe
</script>");
$cantidadart =$_POST["cant"];
echo("<script>
document.f1.cant.value = $cantidadart
</script>");
$dias =$_POST["dias"];
echo("<script>
document.f1.dias.value = $dias
</script>");
if($codigoe!="")
{
if($_POST["buscar"])
    {
$acumb="<table border='1' id='t12'>
<tr>
    <td>Codigo del Articulo</td>
    <td>Nombre</td>
    <td>Imagen</td>
</tr>";
$sql = "SELECT `codigoa` FROM `alumnosf` WHERE `codigo` LIKE $codigoe";
$result=mysqli_query($conn,$sql);
if($result->num_rows > 0)
{
while($mostrar=mysqli_fetch_array($result)){
  $temp=$mostrar['codigoa'];
  $sql = "SELECT `imagen` FROM `inventario` WHERE `codigo` = $temp";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row = $result2->fetch_assoc())
        {
            $contenido = $row["imagen"];
        }
    }
    $img="<img height=200 src='data:image/jpg; base64," .base64_encode($contenido)."'>";
    $sql = "SELECT `nombre` FROM `inventario` WHERE `codigo` = $temp";
      $result2 = $conn->query($sql);
      if($result2->num_rows > 0)
      {
          while($row = $result2->fetch_assoc())
          {
              $contenido2 = $row["nombre"];
          }
      }
$acumb= $acumb . "
<tr>
    <td>" . $mostrar['codigoa'] . "</td>
    <td>" . $contenido2 . "</td>
    <td>" . $img . "</td>
</tr>";
 }
}
 $acumb= $acumb . " </table><br>";
 echo("$acumb");
  }
  if($_POST["devolvert"])
    {
      $sql = "SELECT * FROM `alumnosf` WHERE `codigo` LIKE $codigoe";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows > 0)
      {
      while($mostrar=mysqli_fetch_array($result))
      {
        $temp=$mostrar["codigoa"];
        $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` = $temp";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row = $result2->fetch_assoc())
        {
          $cantidad=$row["cantidad"];
        }
    }
    $cantidadf=$cantidad+1;
    $sql = "UPDATE `inventario` SET `cantidad` = $cantidadf WHERE `codigo` = $temp";
if (mysqli_query($conn, $sql)) 
{
} 
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "DELETE FROM `alumnosf` WHERE `codigo` = $codigoe AND `codigoa` = $temp LIMIT 1";
 if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
      }
    }
  }
  if($codigoa!="")
  {
    if($cantidadart!="")
  {
    if($_POST["aplazar"])
    {
      for ($i = 1; $i <= $cantidadart; $i++)
      {
        $sql = "SELECT `dias` FROM `alumnosf` WHERE `codigo` = $codigoe AND `codigoa` = $codigoa";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row2 = $result2->fetch_assoc())
        {
          $dias2=$row2["dias"];
        }
    }
    $dias3=$dias2+$dias;
          $sql = "UPDATE `alumnosf` SET `dias` = $dias3 WHERE `codigo` = $codigoe AND `codigoa` = $codigoa";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      }
    }
    if($_POST["devolverc"])
    {
      for ($i = 1; $i <= $cantidadart; $i++)
      {
        $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` =$codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
          $cantidad=$row["cantidad"];
        }
    }
    $cantidadf=$cantidad+1;
    $sql = "UPDATE `inventario` SET `cantidad` = $cantidadf WHERE `codigo` = $codigoa";
if (mysqli_query($conn, $sql)) 
{
} 
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "DELETE FROM `alumnosf` WHERE `codigo` = $codigoe AND `codigoa` = $codigoa LIMIT 1";
 if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
      }
    }
  }
  if($_POST["devolver"])
    {
      $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` =$codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
          $cantidad=$row["cantidad"];
        }
    }
    $cantidadf=$cantidad+1;
    $sql = "UPDATE `inventario` SET `cantidad` = $cantidadf WHERE `codigo` = $codigoa";
if (mysqli_query($conn, $sql)) 
{
} 
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "DELETE FROM `alumnosf` WHERE `codigo` = $codigoe AND `codigoa` = $codigoa LIMIT 1";
 if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }
  }
}
    mysqli_close($conn);
?>
 <br> <br> <br>
 <form action="index.php" class="dpibody" method="post">
<label for="regreso">Regresar a la página principal</label>
  <br>
    <br>
  <button type="submit" class="button1">Back home</button>
</form> 
</center>
</body>
</html>