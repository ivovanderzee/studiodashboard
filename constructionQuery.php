<?php

require 'start.php';

$queryConstructions = "
        
        SELECT *
        FROM constructions
        ";
        
      
        $constructions = mysqli_query($conn, $queryConstructions);


?>