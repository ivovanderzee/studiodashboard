<?php 
require 'start.php';



$queryGuests = "
        
        SELECT *
        FROM studioGuests
        ";
        
      
        $resultsGuests = mysqli_query($conn, $queryGuests);




$queryTrafficOV = "
        
        SELECT *
        FROM OV
        ";
        
      
        $resultsTrafficOV = mysqli_query($conn, $queryTrafficOV);








$queryModules = "
        
        SELECT *
        FROM moduleDB
        ";
        
      
        $resultsModules = mysqli_query($conn, $queryModules);






$queryActiveModules = "
        
        SELECT *
        FROM moduleDB
        WHERE active = '1'
        ";
        
      
        $resultsActiveModules = mysqli_query($conn, $queryActiveModules);




$queryConstructions = "
        
        SELECT *
        FROM constructions
        ";
        
      
        $resultsConstructions = mysqli_query($conn, $queryConstructions);




$queryTrafficDelays = "
        
        SELECT *
        FROM trafficJam
        ";
        
      
        $resultsTrafficDelays = mysqli_query($conn, $queryTrafficDelays);


$queryIncidents = "
        
        SELECT *
        FROM incidents
        ";
        
      
        $resultsIncidents = mysqli_query($conn, $queryIncidents);

?>