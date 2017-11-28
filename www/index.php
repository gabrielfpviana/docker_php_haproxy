<?php
echo $_SERVER['SERVER_ADDR'] ;
echo "</br>";
#mysqli_connect("172.30.5.8", "root", "projeto") or die(mysqli_error());
mysqli_connect("db", "root", "projeto") or die(mysqli_error());
echo "Conexão com MySQL com sucesso!"
?>
