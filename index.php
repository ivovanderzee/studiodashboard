
<?php

session_start();

if ( isset( $_SESSION['id'] ) ) { ?>
    

    
    <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Studio Dashboard</title>
 

  <link rel="stylesheet" href="style.css">

</head>

<body id="fixed">
  <script>var fixed = document.getElementById('fixed');

fixed.addEventListener('touchmove', function(e) {

        e.preventDefault();

}, false);</script>
    
    
   
      
     
    <div class="left-menu">
        <div class="logo"><img src="IMAGES/radio1Logo.png" height="50" width="75" /></div>
        
        
        <ul>
            <li><img src="IMAGES/ICONS/baseline-message-24px.svg" width="45"/></li>
            <li><img src="IMAGES/ICONS/baseline-calendar_today-24px.svg" width="45"/></li>
            <li><img src="IMAGES/ICONS/Music-icon.svg" width="45"/></li>
            <li><img src="IMAGES/ICONS/news.svg" width="45"/></li>
            <li><img src="IMAGES/ICONS/traffic-icon.svg" width="45"/></li>
            <li><img src="IMAGES/ICONS/Social%20icon.svg" width="45"/></li>
        </ul>
        
       <div class="addButton"><img src="IMAGES/ICONS/addIcon.svg" height="55" /></div>
        
        </div>
  
    
    <div class="wrapperSter">
       
        </div>
    
    
    
    <div class="lane">
    <div class="laneTitle">
        <span class="spanTitle">GASTEN</span>
        </div>
    <div class="laneContent">
        
        <div class="item"></div>
         <div class="item"></div>
         <div class="item"></div>
         <div class="item"></div>
         <div class="item"></div>
         <div class="item"></div>
         <div class="item"></div>
         <div class="item"></div>
        
        
        </div>
    </div>
    
    
</body>
</html>
    
    
    
    
    
    
    
<?php    
} else {
    // Redirect them to the login page
    header("Location: login.php");
}
?>



