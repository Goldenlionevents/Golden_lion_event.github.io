<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/main.css" />
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src='js/main.js'> </script>
   <title>Document</title>
 </head>
 <body>

     <!-- navbar section -->
     <header>
  
  <nav class="navbar" id="home">
		<img  src="images/logo.png" alt="logo" class="image"/>
        <div class="brand-title"><p>GOLDENLION EVENTS</p></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
		  <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php#home">Home</a></li>
			<li><a href="index.php#services">services</a></li>
            <li><a href="index.php#about">About</a></li>
            <li> <a href="#footer" class="link">Contact</a></li>
          </ul>
        </div>
      </nav>
	</header>


    



    <form action="php/sign in validation.php" method="post" class="book-form">
    <h1 class="text09">sign in to access your account</h1>
      <div class="flex">
        
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         
         <div class="inputBox">
            <span>password :</span>
            <input type="password" name="password" required>
         </div>
      </div>

      <input type="submit" value="sign in" class="btn" name="send">
      <span class="text10">
                <span><br/> <br/>dont have an account! create one <a href='registration op.php'><u>here </u> </a></span>
                <br />
                
              </span>
   </form>





   <!-- footer component-->
   <section class="footer" id="footer">

   <div class="box-container">

      

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +251-123-4567 </a>
         <a href="#"> <i class="fas fa-phone"></i> +251-123-8765 </a>
         <a href="#"> <i class="fas fa-envelope"></i> goldenlion@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> addisababa,ethiopia - 42069 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

 </body>
</html>