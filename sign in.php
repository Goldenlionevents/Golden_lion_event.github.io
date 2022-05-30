<?php

session_start();


include 'header.php';

//error_reporting(E_ERROR | E_PARSE);
?>




    
<div class="top-container">
   
      
      

<form class ="form_user" method="post" id="form" action="php/sign in validation.php" >
            <h1>sign in</h1>
            
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" >
                <div class="error"></div>
            </div>
            
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required  >
                <div class="error"><?php echo $_SESSION['error'];?></div>
            </div>
           
            <button type="submit" name="submit">Sign in</button>
            <span class="text11">
                <span><br/> <br/>dont have an account! sign up <a href='registration op.php'><u>here </u> </a></span>
                <br />
                
              </span>
        </form>
    
     
</div>

<script defer src="javas/user_login.js"></script>

   <!-- footer component-->
   <?php include 'footer.php';?>