<?php
session_start();
session_regenerate_id(true);
if(!isset($_GET['profile']))
{
  header("location:index.php");
exit();
}
require ('php/connection.php');
 
$test=null;
$p=$_GET['profile'];
  $query="SELECT * FROM provider_table WHERE Brand_name='$p'";
  $provider_result=mysqli_query($con,$query);
  $provider_row=mysqli_fetch_array($provider_result);
  $Brand_name=$provider_row['Brand_name'];
  $provider_phone=$provider_row['provider_phone'];
  $provider_email=$provider_row['provider_email'];
  $provider_pp=$provider_row['provider_profile_dir'];
  $brand_img1=$provider_row['brand_img1'];
  $brand_img2=$provider_row['brand_img2'];
  $brand_img3=$provider_row['brand_img3'];
  $description=$provider_row['description'];
  $rating=$provider_row['rating'];
  $number_of_raters=$provider_row['number_of_raters'];
  $price=$provider_row['price'];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GoldenLion Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userview_providers.css">
    

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
         <a href="sign in.php">
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
        <li><a href=" 
        <?php if(isset($_SESSION['user'])){ echo "user_profile.php";}?>
        ">
        <img src="default img/profile.png" class="profile_img" style="display:
         <?php if(!isset($_SESSION['user']))
          {
              echo "none";
          }
         
          ?>;"></a></li>
      </ul>
    </nav> 



<div class="profile_and_name">
<div class="content-container">
  
              <img  class="profile "src="<?php if(empty($provider_pp))
                                                      {
                                                        echo "default img/profile.png";
                                                      }
                                                      else{
                                                        echo $provider_pp;
                                                      }
               ?>" alt="profile_pic"></img>		  
           </div>	
<div class="brand_name">
  <?php echo $Brand_name ;?>
</div>
</div>
<div class="img_and_desc">
<div class="brand_image">
<div class="row">
  <div class="column">
    <img alt='service_imgs' src='<?php echo $brand_img1?>' />  </div >
  <div class="column">
    <img src="<?php echo $brand_img2?>" alt="image" > 
  </div>
  <div class="column">
    <img src="<?php echo $brand_img3?>" alt="image" >
  </div>
<div class="content_description">

  <div class="info_text"><?php echo $description ?></div>
  <div class="info_text">average price <?php if($price==0){echo "????";}else { echo $price;} ?> birr</div>
            <div>
            <div class="contact">
                <p>our contact<br>
                    <a href="#"><ion-icon name="call-outline"></ion-icon></a><?php echo $provider_phone?><br>
                    <a href="#"><ion-icon></ion-icon></a><?php echo $provider_email?><br>
                    
                </p>     
              </div>
              <div class="comments_book"><button class="solid-button_book1" id="book">Book service</button></div>
              
              <div class="booking_info">
                <form class="booking_form">
                  <h1>when are you booking </h1><br/>
                <label for="birthday">booking date:</label>
                  <input type="date" id="birthday" name="birthday" required>
                
                  <label for="birthday">from:</label>
                  <input type="time" id="appt" name="appt" required>
                  <label for="birthday">upto:</label>
                  <input type="time" id="appt" name="appt" required>
                  <button class="solid-button_book1" type="submit">Book </button>
                  <button class="solid-button_book2" type="submit" id="cancel">cancel</button>
                </form>
              
              </div>
              <?php if(isset($_SESSION['user']))
                {
              ?>
              <script>
                document.getElementById("book").addEventListener("click",function()
                {
                  document.querySelector(".booking_info").style.display="flex";
                })
                document.getElementById("cancel").addEventListener("click",function()
                {
                  document.querySelector(".booking_info").style.display="none";
                })
              </script>
              <?php
                }
              else
                {
                ?>
                 <script>
                    document.getElementById("book").addEventListener("click",function()
                {
                  alert("you have to sign in first");
                })
                
              </script>
              <?php } ?>

              <div class="rating">
              <div class="text10">Rating (<?php echo $rating?>)</div>
           <div  style=" padding: 10px;color:white;">
            <i class="fa fa-star fa-2x" data-index="0"></i>
            <i class="fa fa-star fa-2x" data-index="1"></i>
            <i class="fa fa-star fa-2x" data-index="2"></i>
            <i class="fa fa-star fa-2x" data-index="3"></i>
            <i class="fa fa-star fa-2x" data-index="4"></i>
            <div class="text11">Rated by <?php echo $number_of_raters?> users </div>
                                                    </div>
             </div>
             <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
             <script>
        var ratedIndex =<?php echo round($rating)?>;
       
        setStars(ratedIndex-1);
        function setStars(max) {
            for (var i=0; i<=max;i++)
                $('.fa-star:eq('+i+')').css('color', 'yellow');
        }

       
    </script>
           </div>
</div>
 
     
</div>

</div>

</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>