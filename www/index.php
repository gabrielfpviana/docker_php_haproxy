<?php
echo $_SERVER['SERVER_ADDR'];
echo "";
echo "";
echo "";
mysqli_connect("db", "root", "projeto") or die(mysqli_error());
echo "Connected to MySQL<br />";
?>