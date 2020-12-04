<html>
<head>
<style>
table#t12
{
  width:100%;
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
        width:300px;
        height:50px;
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
}
</style>
<title>
Inventario
</title>
</head>
<body>
<div class="container">
  <p><a href="">
    Prestar Art&iacute;culos
  </a></p>
<font color="white">
<center><u><h1>
Ingrese el Codigo o Nombre del Articulo
</h1></u></center>
<form action="archivo4.php" class="dpibody" method="post" name="f1" id="f1">
<center>
<label for="codigo del artículo">Código del artículo</label>
  <input type="text" id="cod" name="cod" value="">
  <br>
  <label for="codigo del artículo">Nombre del artículo</label>
  <input type="text" id="nom" name="nom" value="">
  <br>
  <label for="codigo del artículo">Cantidad de articulos</label>
  <input type="text" id="cant" name="cant" value="">
  <br>
  <br>
  <input type="submit" class="button1" name="buscar" value="Buscar por Codigo">
  <input type="submit" class="button1" name="buscarb" value="Buscar por Nombre">
  <input type="submit" class="button1" name="cola" value ="Meter uno a Carrito">
  <input type="submit" class="button1" name="colan" value ="Meter varios a Carrito">
  <input type="submit" class="button1" name="borrara" value ="Borrar Codigo Especifico del Carrito">
  <input type="submit" class="button1" name="borrar" value ="Borrar Todo del Carrito">
  </center>
</form>
<form action="indexcc.php" class="dpibody" method="post" name="f2" id="f2">
<center>
  <input type="submit" class="button1" name="prestar" value ="Prestar">
  </center>
</form>
</font>
<?php
error_reporting(0);
$nombree=$_POST["nombre"];
$codigoe=$_POST["codigo"];
$correo=$_POST["correo"];
$date = date('d/m/y');
$dias = $_POST["dias"];
$codigoa =$_POST["cod"];
$cantidadart =$_POST["cant"];
echo("<script>
document.f1.cod.value = $codigoa
</script>");
echo("<script>
document.f1.cant.value = $cantidadart
</script>");
$nombreb =$_POST["nom"];
echo("<script>
document.f1.nom.value = '$nombreb'
</script>");
$conn = mysqli_connect("localhost", "root", "", "inventariocc");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST["datos"])
    {
      $sql="SELECT * FROM `inventario`";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows > 0)
       {
      while($mostrar=mysqli_fetch_array($result))
      {
        $temp2=$mostrar['codigo'];
        $temp3=$mostrar['cantidad'];
        $sql = "UPDATE `variable` SET `cantidad` = $temp3 WHERE `codigo` =$temp2";
        if (mysqli_query($conn, $sql)) {
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
      }
    }
    $sql = "INSERT INTO `alumnos` (`nombre`, `codigo`, `correo`,`fecha`,`dias`) VALUES ('$nombree', '$codigoe', '$correo','$date','$dias')";
    if (mysqli_query($conn, $sql)) {
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }   
    }
if($nombreb!="")
{
  if($_POST["buscarb"])
    {
      $acumb="<table border='1' id='t12'>
   <tr>
       <td>Codigo</td>
       <td>Nombre</td>
       <td>Codigo Comercial</td>
       <td>Cantidad</td>
       <td>Imagen</td>
   </tr>";
   $sql="SELECT * FROM `inventario` WHERE `nombre` LIKE '%$nombreb%'";
   $result=mysqli_query($conn,$sql);
   if($result->num_rows > 0)
    {
   while($mostrar=mysqli_fetch_array($result)){
$acumb= $acumb . "
   <tr>
       <td>" . $mostrar['codigo'] . "</td>
       <td>" . $mostrar['nombre'] . "</td>
       <td>" . $mostrar['comercial'] . "</td>
       <td>" . $mostrar['cantidad'] . "</td>
       <td> <img height=200 src='data:image/jpg; base64," .base64_encode($mostrar['imagen']) . "'></td>
   </tr>";
    }
  }
    $acumb= $acumb . " </table><br>";
    echo("$acumb");
  }
}
if ($_POST["borrar"]) 
   {
    $sql = "TRUNCATE TABLE carrito";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $sql="SELECT * FROM `inventario`";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows > 0)
       {
      while($mostrar=mysqli_fetch_array($result))
      {
        $temp2=$mostrar['codigo'];
        $temp3=$mostrar['cantidad'];
        $sql = "UPDATE `variable` SET `cantidad` = $temp3 WHERE `codigo` =$temp2";
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
    if($_POST["colan"])
    {
      $sql = "SELECT `cantidad` FROM `variable` WHERE `codigo` = $codigoa";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $cantidadv = $row["cantidad"];
            }
        }
        if($cantidadv>=$cantidadart)
        {
      for ($i = 1; $i <= $cantidadart; $i++)
       {
        $sql = "SELECT `nombre` FROM `inventario` WHERE `codigo` = $codigoa";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $nombrea = $row["nombre"];
            }
        }
        $sql = "INSERT INTO `carrito` (`codigo`, `nombre`) VALUES ('$codigoa', '$nombrea')";
        if (mysqli_query($conn, $sql)) {
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       }
       $cantidadf=$cantidadv-$cantidadart;
       $sql = "UPDATE `variable` SET `cantidad` = $cantidadf WHERE `codigo` =$codigoa";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      }
    }
  }
    if($_POST["buscar"])
    {
    $sql = "SELECT `nombre` FROM `inventario` WHERE `codigo` = $codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $nombrea = $row["nombre"];
        }
    }
    $sql = "SELECT `comercial` FROM `inventario` WHERE `codigo` = $codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $comercial = $row["comercial"];
        }
    }
    $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` = $codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $cantidad = $row["cantidad"];
        }
    }
    $sql = "SELECT `imagen` FROM `inventario` WHERE `codigo` = $codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $contenido = $row["imagen"];
        }
    }

   echo("<table border='1' id='t12'>
   <tr>
       <td>Codigo</td>
       <td>Nombre</td>
       <td>Codigo Comercial</td>
       <td>Cantidad</td>
       <td>Imagen</td>
   </tr>
   <tr>
       <td>$codigoa</td>
       <td>$nombrea</td>
       <td>$comercial</td>
       <td>$cantidad</td>
       <td><img height=200 src='data:image/jpg; base64," .base64_encode($contenido)."'></td>
   </tr>
   </table>
   <br>");
 }
   if ($_POST["borrara"]) 
   { 
    $sql = "delete from carrito where codigo=$codigoa";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $sql="SELECT `cantidad` FROM `inventario` WHERE `codigo` =$codigoa";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows > 0)
       {
      while($mostrar=mysqli_fetch_array($result))
      {
        $temp2=$mostrar['cantidad'];
      }
    }
    $sql = "UPDATE `variable` SET `cantidad` = $temp2 WHERE `codigo` =$codigoa";
        if (mysqli_query($conn, $sql)) {
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
   }
   if ($_POST["cola"])
   {
    $sql = "SELECT `cantidad` FROM `variable` WHERE `codigo` = $codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $cantidadv = $row["cantidad"];
        }
    }
    if($cantidadv!=0)
    {
    $sql = "SELECT `nombre` FROM `inventario` WHERE `codigo` = $codigoa";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $nombrea = $row["nombre"];
        }
    }
    $sql = "INSERT INTO `carrito` (`codigo`, `nombre`) VALUES ('$codigoa', '$nombrea')";
    if (mysqli_query($conn, $sql)) {
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $cantidadf=$cantidadv-1;
       $sql = "UPDATE `variable` SET `cantidad` = $cantidadf WHERE `codigo` =$codigoa";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
 }
}
?>
<table border='1' id='t12'>
   <tr>
       <td>Codigo del Articulo</td>
       <td>Nombre del Articulo</td>
   </tr>
   <?php
   $sql="SELECT * FROM carrito";
   $result=mysqli_query($conn,$sql);
   while($mostrar=mysqli_fetch_array($result)){
   ?>
   <tr>
       <td><?php echo $mostrar['codigo'];?></td>
       <td><?php echo $mostrar['nombre'];?></td>
   </tr>
   <?php
   }
   mysqli_close($conn);
   ?>
   </table>
</body>
</html>