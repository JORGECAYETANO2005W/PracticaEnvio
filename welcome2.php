<?php 
//recuperar los valores de los input
$nombre=$_POST["name"];
$edad=$_POST["edad"];
echo"Ey " . $nombre."ya tienes " . $edad . "años así que:";

if($edad>=18)
    echo "<p>¡¡Puede Votar!!<p>";
else
    echo "<p>¡¡No Puede Votar!!<p>";
?>