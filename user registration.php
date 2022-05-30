<?php include "header.php"



?>


    



    <div class="top-container">
    <h1 class="text09">fill out the form to register</h1>
      
      

<form class ="form_user" method="post" id="form" action="index.php" >
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="phone number">phone number</label>
                <input id="phone_number" name="phone_number" type="text" >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password"  >
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2"name="password2" type="password"  >
                <div class="error"></div>
            </div>
            <button type="submit">Sign Up</button>
            <span class="text11">
                <span><br/> <br/>already have an account! sign in <a href='sign in.php'><u>here </u> </a></span>
                <br />
                
              </span>
        </form>
    
     
</div>
 




<script defer src="javas/user_reg.js"></script>
  <?php include 'footer.php';?>