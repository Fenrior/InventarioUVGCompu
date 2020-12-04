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
</style>
</head>
<body bgcolor="black">
<center>
<div class="container">
  <p><a href="">
    Deudores
  </a></p>
<form action="archivo5.php" class="dpibody" method="post">
<input type="submit" class="button1" name="mostrar" value="Mostrar todos los deudores">
  <input type="submit" class="button1" name="mostrare" value="Mostrar expirados"><br>
  </form> 
 <form action="index.php" class="dpibody" method="post">
<label for="regreso">Regresar a la página principal</label>
  <br>
    <br>
  <button type="submit" class="button1">Back home</button>
</form> 
<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "inventariocc");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
if ($_POST["mostrare"]) 
{
  $conti=0;
  echo("
<table border='1' id='t12'>
   <tr>
       <td>Codigo</td>
       <td>Nombre</td>
       <td>Correo</td>
       <td>Prestamo</td>
       <td>Expiracion</td>
       <td>Codigo de Articulo</td>
       <td>Imagen</td>
   </tr>
");
   $sql="SELECT * FROM alumnosf";
   $result=mysqli_query($conn,$sql);
   while($mostrar=mysqli_fetch_array($result))
   {
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
    $exp = $mostrar['fecha'];
    $img="<img height=200 src='data:image/jpg; base64," .base64_encode($contenido)."'>";
    $dtime = DateTime::createFromFormat("d/m/y",$exp );
$timestamp = $dtime->getTimestamp();
$dias=$mostrar['dias'];
$exp2 =$timestamp+($dias*60*60*24);
$fecha= date("d/m/y");
$dtime3 = DateTime::createFromFormat("d/m/y",$fecha);
$timestamp3 = $dtime3->getTimestamp();
if($timestamp3>$exp2)
{
  $conti++;
echo("
   <tr>
       <td>". $mostrar['codigo']."</td>
       <td>". $mostrar['nombre']."</td>
       <td>".$mostrar['correo']."</td>
       <td>".$mostrar['fecha']."</td>
       <td>".date("d/m/y",$exp2)."</td>
       <td>".$mostrar['codigoa']."</td>
       <td>".$img."</td>
   </tr>");
   }
  }
  echo("</table>");
  if($conti>0)
  {
    echo("<form action='indexcc.php' class='dpibody' method='post'>
<label for='regreso'>Enviar correos a deudores</label>
  <br>
    <br>
  <input type='submit' class='button1' name='correito' value='Enviar correo a expirados'>
</form> ");
  }
}
if($_POST["mostrar"] || $_POST["hola"])
{
echo("
<table border='1' id='t12'>
   <tr>
       <td>Codigo</td>
       <td>Nombre</td>
       <td>Correo</td>
       <td>Prestamo</td>
       <td>Expiracion</td>
       <td>Codigo de Articulo</td>
       <td>Imagen</td>
   </tr>
");
   $sql="SELECT * FROM alumnosf";
   $result=mysqli_query($conn,$sql);
   while($mostrar=mysqli_fetch_array($result))
   {
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
    $exp = $mostrar['fecha'];
    $img="<img height=200 src='data:image/jpg; base64," .base64_encode($contenido)."'>";
    $dtime = DateTime::createFromFormat("d/m/y",$exp );
$timestamp = $dtime->getTimestamp();
$dias=$mostrar['dias'];
$exp2 =$timestamp+($dias*60*60*24);
echo("
   <tr>
       <td>". $mostrar['codigo']."</td>
       <td>". $mostrar['nombre']."</td>
       <td>".$mostrar['correo']."</td>
       <td>".$mostrar['fecha']."</td>
       <td>".date("d/m/y",$exp2)."</td>
       <td>".$mostrar['codigoa']."</td>
       <td>".$img."</td>
   </tr>");
   }
  }
   mysqli_close($conn);
   echo("</table>");
   ?> 
</center>
   </body>
</html>