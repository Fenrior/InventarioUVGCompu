<html>
<head>
<style>
label{
width: 800px;
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
</style>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta lang="es">
<body bgcolor="black">
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\htdocs\inventariouvg\inventariouvg\vendor\autoload.php';
error_reporting(0);
if($_POST["prestar"])
{
$enter = "\n";
$conn = mysqli_connect("localhost", "root", "", "inventariocc");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT `correo` FROM `alumnos` WHERE `correo` IS NOT NULL";
$result2 = $conn->query($sql);
if($result2->num_rows > 0)
{
    while($row = $result2->fetch_assoc())
    {
      $correo=$row["correo"];
    }
}
$acum="";
$sql = "SELECT * FROM `carrito`";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
           $acum.="Nombre: ".$row["nombre"] . ", " . "Codigo: ".$row["codigo"].$enter;
        }
      }
      $sql = "SELECT * FROM `alumnos`";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row2 = $result2->fetch_assoc())
        {
          $dias2=$row2["dias"];
        }
    }
//ini_set("display_errors",1);
  //     error_reporting(E_ALL);


$mail = new PHPMailer(TRUE);
try {
   
   $mail->setFrom('uvgccinv@gmail.com','Inventario CC');
   $mail->addAddress($correo);
   $mail->Subject = 'Prestamo del CC';
   $mail->Body = 'Usted ha realizado un préstamo del salon de profesores del CC de la Universidad del Valle, los articulos prestados se identifican como:' . $enter . $acum . $enter ."Favor devolver en ".$dias2." o a la brevedad de lo posible.";
   
   /* SMTP parameters. */
   
   /* PHPMailer ahora usa SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'smtp.gmail.com';
//$mail->SMTPDebug = 2;

   /* Uso de SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* encriptar el sistema. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'uvgccinv@gmail.com';
   
   /* SMTP authentication password. */
   $mail->Password = 'calvario';
   
   /* SMTP port. */
   $mail->Port = 587;
   
   /* Enviar el correo. */
   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
echo("
      <center>
<form action='index.php' class='dpibody' method='post'>
<label for='regreso'>Se le ha enviado un correo exitosamente a la direccion: $correo, ahora por favor presione el boton para regresar a la pagina principal</label>
  <br>
    <br>
  <input type='submit' name='prestar' class='button1' value='Back home'>
</form> </center>");
mysqli_close($conn);
}










if($_POST["correito"])
{
$enter = "\n";
$conn = mysqli_connect("localhost", "root", "", "inventariocc");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `alumnosf`";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
      $correo=$row["correo"];
      $fecha=$row["fecha"];
      $codigo=$row["codigoa"];
      $sql = "SELECT * FROM `inventario` WHERE `codigo`=$codigo";
      $result2 = $conn->query($sql);
      if($result2->num_rows > 0)
      {
          while($row = $result2->fetch_assoc())
          {
            $nombre=$row["nombre"];
          }
        }
      $dtime = DateTime::createFromFormat("y/m/d",$fecha );
$timestamp = $dtime->getTimestamp();
$dtime2 = DateTime::createFromFormat("y/m/d","70/1/14");
$timestamp2 = $dtime2->getTimestamp();
$exp2 =$timestamp+$timestamp2-31536000;
$fecha= date("d/m/y");
$dtime3 = DateTime::createFromFormat("d/m/y",$fecha);
$timestamp3 = $dtime3->getTimestamp();
if($timestamp3>$exp2)
{
//ini_set("display_errors",1);



$mail = new PHPMailer(TRUE);
try {
   
   $mail->setFrom('uvgccinv@gmail.com','Inventario CC');
   $mail->addAddress($correo);
   $mail->Subject = 'Su prestamo ha expirado';
   $mail->Body = 'Su prestamo de articulos del salon de profesores del CC de la Universidad del Valle ha expirado, agradeceremos devolver el articulo:'. $enter .'Nombre: '.$nombre.' Codigo: '.$codigo.$enter.'a la brevedad posible';
   
   /* SMTP parameters. */
   
   /* PHPMailer ahora usa SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'smtp.gmail.com';
//$mail->SMTPDebug = 2;

   /* Uso de SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* encriptar el sistema. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'uvgccinv@gmail.com';
   
   /* SMTP authentication password. */
   $mail->Password = 'calvario';
   
   /* SMTP port. */
   $mail->Port = 587;
   
   /* Enviar el correo. */
   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}

}
$acucor.=$correo.$enter;
    }
    $acucor.=$enter;
    echo("
      <center>
<form action='index.php' class='dpibody' method='post'>
<label for='regreso'>Se ha enviado correo(s) exitosamente a la(s) direccion(es): $acucor, ahora por favor presione el boton para regresar a la pagina principal</label>
  <br>
    <br>
  <input type='submit' class='button1' value='Back home'>
</form> </center>");
}
}
mysqli_close($conn);
?>
</body>
</html>