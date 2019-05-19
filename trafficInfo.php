<?php

session_start();
require 'trafficQuery.php';

if ( isset( $_SESSION['id'] ) ) { ?>
    



    
    <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Studio Dashboard</title>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>
    $(document).ready(function(){  
        setInterval(function(){   
            $("laneContent").load("trafficQuery.php");
        }, 1000);
    });
    </script>
    


  <link rel="stylesheet" href="style.css">

</head>

<body id="fixed">
    

    
    
  

<script type="text/javascript">
var auto_refresh = setInterval(
function () {
    $('#laneContent').load('#laneContent');
}, 1000);
</script>
    
    
   
      
    <div class="profile">
        
   
    <div class="profileImage" style="background-image: url('IMAGES/image1.jpg'); background-size: cover;"></div>
    
    
    </div>
    
     
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
    
    
    
    
    <div class="modules">
    
    
    </div>
    
    
    
    
  
    
    <div class="wrapperSter">
       
        </div>
    
    
    
    
    
    <div class="lane">
    <div class="laneTitle">
        <span class="spanTitle">OV-info</span>
        </div>
    <div class="laneContent">
        
        
        
        
        

  <?php foreach($results as $result): ?>
        
         <div class="itemWrapper">
        <div class="date">
             

            <?php if ($result['type'] == "Storing") : ?>
            <img class="icon" src="IMAGES/ICONS/signIcon.svg">
            
            <?php elseif($result['type'] == "Werkzaamheden") : ?>
            <img class="icon" src="IMAGES/ICONS/construction.svg">
            <?php endif; ?>
            
             
             
             </div>
           
           <div id="" class="itemContent">
               
               
            <p class="title"><?php echo $result['type'];?></p>
                <p class="subTitle"><?php echo $result['stationVan'];?></p>
               
                 <p class="subSubTitle"><?php echo $result['delay'] . " " . "minuten vertraging";?></p>
             
             </div>
             
             
             
        </div>

        
   <?php endforeach; ?>


      
        
        
        </div>
    </div>
    
    
    
    
    
</body>
</html>
    
    
    
    
    
    
    
<?php    
} else {
    // Redirect them to the login page
    header("Location: index.php");
}
?>



