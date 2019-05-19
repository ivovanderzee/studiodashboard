<?php

session_start();
 
if(isset($_POST['submit'])){
     
include 'start.php';
     
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
     
     
    if(empty($email) || empty($password)){
         
        header("Location: index.php?login=empty");
        exit();
         
    }else{
        $query = "SELECT * FROM usersDashboard WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);
         
        if($resultCheck < 1){
             
           header("Location: index.php?login=invalid");
           exit(); 
             
        }else{
             
            if($row = mysqli_fetch_assoc($result)){
                 
             
                 
                if($password == $row['password']){
                     
                     
                 
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    exit();
                   
                     
                }
                 
                else{
                     
                   header("Location: index.php?login=error2");
                     
                }
                 
            }
             
        }
    }
     
     
}else{
        header("Location: index.php?login=error3");
        exit();
    }

?>