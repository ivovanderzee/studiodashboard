<?php

require 'start.php';

$query = "
        
        SELECT *
        FROM incidents
        ";
        
      
        $incidents = mysqli_query($conn, $query);
