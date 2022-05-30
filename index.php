<?php 

session_start();
session_regenerate_id(true);


include 'header.php';


?>


   <div id="home" class="top-container">
          <div class="hero">
			 <div class="content-container">
              <h1 class="text09">Book an exclusive</h1>
              <h2 class="subheading">
                home for your exquisitely planned ocassions
              </h2>
              <span class="text10">
                <span>Each property is hand-picked,</span>
                <br />
                <span>personally visited and cannot be found elsewhere.</span>
              </span>
              <div class="solid-button-container ">
                <button class="solid-button" style="display:<?php if(isset($_SESSION['user'])) {  echo 'none;'; }  ?>">
                  <span><a href="registration op.php"> join us</a></span>
                </button>
            </div> 
           </div>	
          </div>
        </div>



<!--service section-->
<ul>

</ul>

<div class='cards' id="services">
      <h1>our services</h1>
      <div class='cards__container'>
        <div class='cards__wrapper'>
          <ul class='cards__items'>
            
          <li class='cards__item'>
        <a class='cards__item__link' href="band and dj.php"   >
          
          <figure class='cards__item__pic-wrap' data-category="band and dj">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/band and dj.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>find the greatest bands and djs<br/>to light up your show</h5>
          </div>
</a>
      </li>

      <li class='cards__item'>
        <a class='cards__item__link' href="clothing.php">
          <figure class='cards__item__pic-wrap' data-category="clothing">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/clothing.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>find the wardrobe that will make <br/>you stand out</h5>
          </div>
</a>
      </li>

      <li class='cards__item'>
        <a class='cards__item__link' href="catering.php">
          <figure class='cards__item__pic-wrap' data-category="catering">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/catering.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>find amazing food for your event<br/>made by great chefs</h5>
          </div>
</a>
      </li>

      

          </ul>

          <ul class='cards__items'>
            
          <li class='cards__item'>
        <a class='cards__item__link' href="car rental.php">
          <figure class='cards__item__pic-wrap' data-category="car rental">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/car rental.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>all the vehicle you need to for any<br/>and all purposes</h5>
          </div>
</a>
      </li>

      <li class='cards__item'>
        <a class='cards__item__link' href="decor.php">
          <figure class='cards__item__pic-wrap' data-category="decor">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/decor.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>make your event look glamorous <br/>by finding the best decor</h5>
          </div>
</a>
      </li>

      <li class='cards__item'>
        <a class='cards__item__link' href="hair salon.php">
          <figure class='cards__item__pic-wrap' data-category="hair salon">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/hair salon.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>a great hair is a great look<br/>get your hair done at the best place</h5>
          </div>
</a>
      </li>

      

          </ul>
          <ul class='cards__items'>
            
          <li class='cards__item'>
        <a class='cards__item__link' href="hall rental.php">
          <figure class='cards__item__pic-wrap' data-category="hall rental">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/hall rental.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>enjoy your event at the best place<br/>find the hall that fits best</h5>
          </div>
</a>
      </li>

      <li class='cards__item'>
        <a class='cards__item__link' href="pastry.php">
          <figure class='cards__item__pic-wrap' data-category="pastry">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/pastry.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>the best suppliers of sweet things in addis<br/>find the baker that fits you</h5>
          </div>
</a>
      </li>

      <li class='cards__item'>
        <a class='cards__item__link' href="video and photo.php">
          <figure class='cards__item__pic-wrap' data-category="video and photo">
            <img
              class='cards__item__img'
              alt='service_imgs'
              src='images/video and photo.png'
            />
          </figure>
          <div class='cards__item__info'>
            <h5 class='cards__item__text'>capture your memory forever with the<br/>photographer and videographer</h5>
          </div>
</a>
      </li>



          </ul>
        
        </div>
      </div>
    </div>


<div class='about_us_section' id="about">
    <div class='content_about'>
        <div class="title_about">About Us</div>
        <div class='info_about'>golden lion events is a platform where services related to event organization are provided
by private companies and users that are in need of such services find what they need all in one place.
we aim to save your time as a seeker and bring you customers as a service provider. feel free to explore
our site and find what you need. if their is additional information you want us to give please contact us bellow
thank you.</div>
</div>
</div>










  <?php include 'footer.php';
  exit();
  
  ?>