<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Studio Dashboard</title>
 

  <link rel="stylesheet" href="style.css">
    
    
    
<script>var fixed = document.getElementById('noScroll');

fixed.addEventListener('touchmove', function(e) {

        e.preventDefault();

}, false);</script>
    
    
    
<script type="text/javascript">
    $(document).ready(function() {
       $("#loginButton").click(function() {
           $("#inlogForm").submit();
       });
    });
</script>

</head>

<body id="noScroll">
    
 
    
    <div class="left">
        
        
        <div class="logoLoginPage"><img src="images/radio1Logo.png" width="160" /></div>
    
    <span class="leftSpan">STUDIODASHBOARD/
        <br>LOGIN
        </span>
        
        <br>
        <span class="subHead">/LOGIN</span>
    
    </div>
   <div class="right">
    
  
       
       
       <div class="login">
       <form class="inlogForm" id="inlogForm" action="authentication.php" method="POST">
      
            <input class="inputField" name="email" type="text" placeholder="e-mail">
            <br>
            <input class="inputField" name="password" type="password" placeholder="wachtwoord">
            <br>
            <input type="submit" name="submit" style="display:none;" />
            
           </form>
       
       
       
       </div>
       
       <input  name="submit" class="loginButton" id="loginButton" value="LOGIN" type="submit" form="inlogForm">
       
       </div>
       

    
    
    
</body>
</html>