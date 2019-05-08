<?php

require 'start.php';

$query = $conn->prepare("
        
        SELECT id, email, password
        FROM dashboardUsers
        ");
        
        $query->execute();
        $query = $results->fetchAll(PDO::FETCH_ASSOC);

?>
