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


    



    <section class="booking">

<h1 class="heading-title">the following information is important so fill it out properly</h1>

<form action="book_form.php" method="post" class="book-form_1">

   <div class="flex">
      <div class="inputBox">
         <span>name :</span>
         <input type="text" placeholder="enter your name" name="name" required>
      </div>
      <div class="inputBox">
         <span> brand name :</span>
         <input type="text" placeholder="enter your brand name" name="name" required>
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email" required>
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your number" name="phone" required>
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" name="address" required>
      </div>
      <div class="inputBox">
         <span>what service are you providing  :</span>
         <select id="cars" name="services" required>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  <option value="audi">Audi</option>

</select>
      </div>
      <div class="inputBox">
         <span> select a profile image:</span>
         <input type="file"  name="profileimage" required>
      </div>
      <div class="inputBox">
         <span>select three images to display your work:</span>
         <input type="file"  name="profileimage" required>
         <input type="file"  name="profileimage" required>
         <input type="file"  name="profileimage" required>
        
      </div>
      <div class="inputBox">
         <span>password:</span>
         <input type="password" name="password" placeholder="enter your password" required>
         
      </div>
      <div class="inputBox">
         <span> verify password:</span>
         <input type="password" name="checkpassword" placeholder="check your password" required>
         
      </div>
   </div>
  
   <input type="submit" value="submit" class="btn" name="send">

</form>
</section>


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