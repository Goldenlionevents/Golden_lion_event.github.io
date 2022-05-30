<?php 
session_start();
require ('connection.php');
error_reporting(E_ERROR | E_PARSE);

    if(isset($_POST['submit']))
    {

        $username=$_POST['username'];
        $phone=$_POST['phone_number'];
      $emailinput=$_POST['email'];
      $pass=$_POST['password'];

      $username=stripslashes($username);
      $phone=stripslashes($phone);
      $emailinput=stripslashes($emailinput);
      $pass=stripslashes($pass);

      $username=mysqli_real_escape_string($con,$username);
      $phone=mysqli_real_escape_string($con,$phone);
      $emailinput=mysqli_real_escape_string($con,$emailinput);
      $pass=mysqli_real_escape_string($con,$pass);

      $query="SELECT user_email FROM user WHERE user_email='$emailinput'";
     
      $result=mysqli_query($con,$query);
      $row=mysqli_fetch_array($result);
      
      if(empty($row))
      {
        $sql = "INSERT INTO user (user_name, user_password, user_email,user_phone) VALUES ('$username','$pass','$emailinput','$phone')";
        if (mysqli_query($con, $sql)) {
            $_SESSION['user']= $username;
            header("location:../user_account_page.php");
            mysqli_close($con);
            exit();
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($con);
            mysqli_close($con);
         }
        
    }
      }
      if($row['user_email'] == $emailinput)
      {
          $_SESSION['error_reg']="their is an account with this email";
          header('location:../user registration.php');
          exit();
      }



           
    
?>