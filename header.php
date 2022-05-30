<?php


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GoldenLion Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/All.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img  src="images/logo.png" alt="logo" class="image"/>
      <label class="logo">GoldenLion Event</label>
      <ul>
        <li><a class="active" href="index.php#home">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#services">Services</a></li>
        <li><a href="index.php#footer">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><button class="solid-button" id="solid-button">
       
         <a href="<?php if(isset($_SESSION['user'])) {echo 'logout.php';} else { echo 'sign in.php';} ?>">
         
          <?php 
          if(isset($_SESSION['user']))
          {
              echo "sign out";
          }
          else
          {
            echo "sign in";
          }

        ?> 
        </a></button></li>
        <li><a href=" <?php if(isset($_SESSION['user'])){ echo "user_profile.php";}?>">
        <img src="default img/profile.png" class="profile_img" style="display:
         <?php if(!isset($_SESSION['user']))
          {
              echo "none";
          }
         
          ?>;"></a></li>
      </ul>
    </nav> 
