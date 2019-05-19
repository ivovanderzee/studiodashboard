<?php

require 'start.php';

$sql = $conn->prepare("
        
        SELECT id, email, password
        FROM dashboardUsers
        ");
        
        $result = $conn->query($sql)
        
?>
