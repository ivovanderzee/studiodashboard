<?php

session_start();
require 'DBqueries.php';


if ( isset( $_SESSION['username'] ) ) { ?>
    



    
    <!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Studio Dashboard</title>
    
    
    
    <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
      </script>
    
    <script type = "text/javascript" language = "javascript">
   
         $(document).ready(function() {

            $("#addButton").click(function(){
               $(".modulesWrapper").show( "slide", { direction: "left"  }, 250 );
                document.getElementById("addButton").style.display = "none";
            });
             
             
              $("#backButton").click(function(){
               $(".modulesWrapper").hide( "slide", { direction: "left"  }, 250 );
                  document.getElementById("addButton").style.display = "block";
                  
            });

           
				
         });
			
      </script>
    
    
    
  
      


  <link rel="stylesheet" href="style.css">

</head>

<body id="fixed">
    

    
 

    
  


       
      
    <div class="profile">
        
    <span class="loginName"><?php echo $_SESSION['username']; ?></span>
    <div class="profileImage" style="background-image: url('<?php echo $_SESSION['userImage']; ?>'); background-size: cover;"></div>
    
    
    </div>
    
     
    <div class="left-menu">
        <div class="logo"><img src="IMAGES/radio1Logo.png" height="50" width="75" /></div>
        
        <div class="indicator"></div>
        
        
        <ul>
            <?php foreach ($resultsActiveModules as $activeModule): ?>
            
            
            <li><a href="<?php echo $activeModule['link']; ?>"><img src="<?php echo $activeModule['image'];?>" width="45"/></a></li>
            
            
            <?php endforeach; ?>
            
        </ul>
        
    <input id="addButton" class="addButton" type="button">
        
        
        </div>
    
    
    
    
    <div style="display:none;" id="modulesWrapper" class="modulesWrapper">
        
         <input id="backButton" class="backButton" type="button" onclick="hideModules()">
    
        <p class="titleSpan">Modules</p>
        
        
       <input class="searchBar" type="text" placeholder="Zoek een module">
        
        
    
        <div class="modulesRow">
        
            
            <?php foreach($resultsModules as $module): ?>
        
        <div class="moduleItem">
            
            <div class="moduleItemContent">
            
            
            <p class="moduleTitle"><?php echo $module['name']; ?></p>
            
              <p class="moduleText"><?php echo $module['text']; ?></p>
        
            </div>
            
            <div class="selectItem">
            
            
            <input id="checkbox" type="checkbox" name="checkbox"  <?php if ($module['active'] == 1) { echo 'checked="checked"'; } ?>>
            </div>
             
            </div>
            
            
               <?php endforeach; ?>
            
            
            
        
    
        
            
        
        
        
        </div>
        
        
    
    </div>
    
    
    
    
  
    
    <div class="wrapperSterTijden">
        
        <div class="programInfo">
        <div class="content">
        <p class="programNameTitle">GAAN!</p>
        <p class="programTimes">04.00 - 06.00</p>
        </div>
        </div>
        
        
        <div class="sterTijden">
        
        <div class="contentSter">
            1100A
            <br>
           
            <span class="time">03:46</span>
        </div>
            
            
            <div class="contentSter">
            1100B
            <br>
            
            <span class="time">02:16</span>
        </div>
        
        
        </div>
       
        </div>
    
    
    
    
    <div class="lanesWrapper">
    <div class="laneWrapper">
    <div class="laneTitle">
        <span class="spanTitle">VERVANGINGEN</span>
        </div>
    <div class="laneContent">
        
        
        
        
        

  <?php foreach($resultsTrafficOV as $trafficOV): ?>
        
         <div class="itemWrapper">
        <div class="date">
             

            <?php if ($trafficOV['type'] == "Storing") : ?>
            <img class="icon" src="IMAGES/ICONS/signIcon.svg">
            
            <?php elseif($trafficOV['type'] == "Werkzaamheden") : ?>
            <img class="icon" src="IMAGES/ICONS/construction.svg">
            <?php endif; ?>
            
             
             
             </div>
             
             
             
           <div class="itemContentWrapper">
           
           <div id="" class="itemContent">
               
               
            <p class="title"><?php echo $trafficOV['type'];?></p>
                <p class="subTitle"><?php echo $trafficOV['stationVan'];?></p>
               
                 <p class="subSubTitle"><?php echo $trafficOV['delay'] . " " . "minuten vertraging";?></p>
             
             </div>
               
               </div>  
             
             
             
        </div>

        
   <?php endforeach; ?>


      
        
        
        <button type="submit" class="addElement">Voeg toe</button>
        </div>
        
        
        
        
        
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



