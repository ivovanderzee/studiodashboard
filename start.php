<?php

require 'config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect($servername, $username, $password, $databasename);

?>
