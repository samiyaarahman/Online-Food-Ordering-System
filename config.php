<?php
  $server_name = 'localhost';
  $dbusername = 'root';
  $dbpassword = '';
  $dbname = 'food';
  $connection = mysqli_connect($server_name, $dbusername, $dbpassword, $dbname);


// Check connection
if (!$connection) {
    die("Connection failed");
}

?>
