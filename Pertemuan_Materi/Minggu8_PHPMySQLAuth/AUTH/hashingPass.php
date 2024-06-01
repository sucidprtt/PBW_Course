<?php
$password = "Private";
echo ("Password: ". $password . "<br>");
echo md5($password);
echo "<br>";
echo crypt($password, '$1$SomeSalt$');