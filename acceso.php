<?php
$conn = mysqli_connect("localhost", "ACortez", "ACortez123", "catalogo");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>