<html>
<head>
<meta lang="es">
<meta charset="UTF-8">
<title>
Inventario UVG
</title>
<style>
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
    Inventario CC UVG
  </a></p>
  <center>
<font color="black">
<h2 class="roto">&iquest;Qu&eacute; desea hacer?</h2>
<form action="datospersonales.php" method="post">
  <br>
  <input type="submit" class="boton" value="Prestar">
</form> 
<form action="devolverUVG.php"  method="post">
  <br>
  <input type="submit" class="boton" value="Devolver">
</form> 
<form action="archivo5.php"  method="post">
  <br>
  <input type="submit" name="hola" class="boton" value="Deudores">
</form> 
<form action="archivo6.php"  method="post">
  <br>
  <input type="submit" name="bebe" class="boton" value="Alta/Baja">
</form> 
</center>
</div>
<?php 
error_reporting(0);
//phpinfo();
if ($_POST["prestar"]) 
{
  $nombree="";
  $codigoe="";
  $correo="";
  $date="";
  $dias="";
  $sql = "SELECT `nombre` FROM `alumnos` WHERE `nombre` IS NOT NULL";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row = $result2->fetch_assoc())
        {
          $nombree=$row["nombre"];
        }
    }
    $sql = "SELECT `codigo` FROM `alumnos` WHERE `codigo` != 0";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row = $result2->fetch_assoc())
        {
          $codigoe=$row["codigo"];
        }
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
    $sql = "SELECT `fecha` FROM `alumnos` WHERE `fecha` IS NOT NULL";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row = $result2->fetch_assoc())
        {
          $date=$row["fecha"];
        }
    }
    $sql = "SELECT `dias` FROM `alumnos` WHERE `dias` IS NOT NULL";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row = $result2->fetch_assoc())
        {
          $dias=$row["dias"];
        }
    }
    $sql = "TRUNCATE TABLE alumnos";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   /* $sql = "ALTER TABLE 'carrito' ORDER BY 'nombre' ASC";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $acum=0;
    $acum3=0;*/
$sql = "SELECT `codigo` FROM `carrito`";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
     /*     if($acum3==0)
          {
                $temp=$row["codigo"];
          }
          if($acum==0)
          {
            $temp2=$row["codigo"];
          $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` =$temp2";
          $result2 = $conn->query($sql);
          if($result2->num_rows > 0)
          {
              while($row2 = $result2->fetch_assoc())
              {
                $cantidad=$row2["cantidad"];
              }
          }
          }
          if($acum<$cantidad)
          {
            $next=next($row["codigo"]);
            prev($row["codigo"]);
        if($next!=$row["codigo"])
        {
          $acum=0;
        }
        else
        {
          $acum=$acum+1;
        }
        $acum3=$acum3+1;*/
        $temp=$row["codigo"];
          $sql = "INSERT INTO `alumnosf` (`codigo`, `nombre`, `correo`, `fecha`,`codigoa`,`dias`) VALUES ('$codigoe', '$nombree', '$correo', '$date', '$temp', '$dias')";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
          $sql = "SELECT `cantidad` FROM `inventario` WHERE `codigo` =$temp";
    $result2 = $conn->query($sql);
    if($result2->num_rows > 0)
    {
        while($row2 = $result2->fetch_assoc())
        {
          $cantidad=$row2["cantidad"];
        }
    }
    $cantidadf=$cantidad-1;
          $sql = "UPDATE `inventario` SET `cantidad` = $cantidadf WHERE `codigo` =$temp";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
        //}
      }
    }
    $sql = "TRUNCATE TABLE carrito";
    if (mysqli_query($conn, $sql)) 
    {
    } 
   else
    {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
  mysqli_close($conn);
?>
</body>
</html>