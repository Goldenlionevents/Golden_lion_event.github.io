<?php 
session_start();
require ('connection.php');

    if(isset($_POST['submit']))
    {
      $emailinput=$_POST['email'];
      $pass=$_POST['password'];
      $emailinput=stripslashes($emailinput);
      $pass=stripslashes($pass);
      $emailinput=mysqli_real_escape_string($con,$emailinput);
      $pass=mysqli_real_escape_string($con,$pass);

            $query="SELECT * FROM user WHERE user_email='$emailinput' and user_Password='$pass'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
            if(empty($row))
            {
                
                $q="SELECT * FROM provider_table WHERE provider_email='$emailinput' and Provider_Password='$pass'";
                $provider_result=mysqli_query($con,$q);
                $provider_row=mysqli_fetch_array($provider_result);
            if(empty ($provider_row))
            {
                
                
                
                $_SESSION['error']="your email or password was incorrect";
                header("location:../sign in.php");
                session_regenerate_id(true);
                exit();
            }
             else if($provider_row['provider_email']==$emailinput && $provider_row['Provider_password']==$pass)
            {
                
                $_SESSION['provider']= $provider_row['Brand_name'];
                header("location:../provider_profile.php");
                session_regenerate_id(true);
                exit();
            }
        }
           else if($row['user_email']==$emailinput && $row['user_password']==$pass)
            {
            
                $_SESSION['user']= $row['user_name'];
                header("location:../index.php");
                session_regenerate_id(true);
                exit();
            }
            else{
                echo "error";
            }
    }
    else
    {
        echo 'something went wrong';
    }
    

?>