<?php

require 'start.php';

$query = "
        
        SELECT *
        FROM trafficJam
        ";
        
      
        $trafficDelays = mysqli_query($conn, $query);
