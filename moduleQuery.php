<?php

require 'start.php';

$query = "
        
        SELECT *
        FROM moduleDB
        ";
        
      
        $modules = mysqli_query($conn, $query);






$queryActive = "
        
        SELECT *
        FROM moduleDB
        WHERE active = '1'
        ";
        
      
        $modulesActive = mysqli_query($conn, $queryActive);

?>

