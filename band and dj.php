<?php
session_start();
session_regenerate_id(true);
include 'header.php';
require ('php/connection.php');
$query="SELECT * FROM provider_table WHERE provider_service='band and dj' ORDER BY rating DESC";
$result=mysqli_query($con,$query);

?>

<div class="title_service">
<h1 class="text12">BANDS AND DJS</h1>
</div>
<form action="" method="GET">
<div class="search_box">
    <div class="search_element">
<input type="text" placeholder="search" class="search" name="search">
<button type="submit" class="search_btn" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">search</button> 
</form>


</div>

<form class="filter_form" action="" method="GET">

<select name="filter" id="filter">
    <option value="highest_reviewed"> highest reviewed</option>
    <option value="most_reviewed">most reviewed</option>
    <option value="most_requested">most requested</option>
    <option value="price_descending">price descending</option>
    <option value="price_ascending">price ascending</option>
    </select>
    <button type="submit" class="search_btn1" value="<?php if(isset($_GET['filter'])){echo $_GET['filter']; } ?>">filter</button> 
</form>
</div>

<h1 style="text-align:center;">Providers</h1>
<div class="row">
<?php
if(!isset($_GET['search']) && !isset($_GET['filter'])){

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            
            echo '<div class="card">';
            echo '<div class="top">';
            if($row["provider_profile_dir"]==null)
            {
                echo '<img src="default img/profile.png" alt="profile img">';
            }
            echo '<img src="'.$row["provider_profile_dir"].'" alt="profile img">';
            echo '</div>';
            echo '<div class="bottom">';
            echo '<h3>'.$row["Brand_name"].'</h3>';
            $myArray = json_decode(json_encode($row['description']), true);
            echo '<p>'. substr($myArray, 0, 180).'</p>';
            echo '   <a href="provider_profile.php?profile='.$row["Brand_name"].'" class="btn">View More <i class="fa-solid fa-angles-right"></i></a>';
            echo ' </div>';
            echo  '</div>';
        }
    }
        }
else if(isset($_GET['search']))
{
    $filtervalues = $_GET['search'];
   
    $q = "SELECT * FROM provider_table WHERE  provider_service='band and dj' and Brand_name LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $q);

    if($query_run->num_rows > 0)
    {
        while($r=$query_run->fetch_assoc())
        {
            echo '<div class="card">';
            echo '<div class="top">';
            if($r["provider_profile_dir"]==null)
            {
                echo '<img src="default img/profile.png" alt="profile img">';
            }
            echo '<img src="'.$r["provider_profile_dir"].'" alt="profile img">';
            echo '</div>';
            echo '<div class="bottom">';
            echo '<h3>'.$r["Brand_name"].'</h3>';
            echo '<p>'. substr($r["description"], 0, 180).'</p>';
            echo '   <a href="provider_profile.php?profile='.$r["Brand_name"].'" class="btn">View More <i class="fa-solid fa-angles-right"></i></a>';
             echo ' </div>';
            echo  '</div>';
        }
    }
    unset($_GET['search']);
    
}
if(isset($_GET['filter']))
{
    if($_GET['filter']=="most_reviewed")
    {
        $filtervalues = $_GET['filter'];
   
        $q = "SELECT * FROM provider_table WHERE  provider_service='band and dj' order by number_of_raters desc ";
        $query_run = mysqli_query($con, $q);
        if($query_run->num_rows > 0)
    {
        while($r=$query_run->fetch_assoc())
        {
            echo '<div class="card">';
            echo '<div class="top">';
            if($r["provider_profile_dir"]==null)
            {
                echo '<img src="default img/profile.png" alt="profile img">';
            }
            echo '<img src="'.$r["provider_profile_dir"].'" alt="profile img">';
            echo '</div>';
            echo '<div class="bottom">';
            echo '<h3>'.$r["Brand_name"].'</h3>';
            echo '<p>'. substr($r["description"], 0, 180).'</p>';
            echo '   <a href="provider_profile.php?profile='.$r["Brand_name"].'" class="btn">View More <i class="fa-solid fa-angles-right"></i></a>';
            echo ' </div>';
            echo  '</div>';
        }
    }
    unset($_GET['filter']); 
    }
    else if($_GET['filter']=="most_requested")
    {
        $filtervalues = $_GET['filter'];
   
        $q = "SELECT * FROM provider_table WHERE  provider_service='band and dj' order by number_of_raters desc ";
        $query_run = mysqli_query($con, $q);
        if($query_run->num_rows > 0)
    {
        while($r=$query_run->fetch_assoc())
        {
            echo '<div class="card">';
            echo '<div class="top">';
            if($r["provider_profile_dir"]==null)
            {
                echo '<img src="default img/profile.png" alt="profile img">';
            }
            echo '<img src="'.$r["provider_profile_dir"].'" alt="profile img">';
            echo '</div>';
            echo '<div class="bottom">';
            echo '<h3>'.$r["Brand_name"].'</h3>';
            echo '<p>'. substr($r["description"], 0, 180).'</p>';
            echo '   <a href="provider_profile.php?profile='.$r["Brand_name"].'" class="btn">View More <i class="fa-solid fa-angles-right"></i></a>';
           echo ' </div>';
            echo  '</div>';
        }
    }
    unset($_GET['filter']); 
    }
    else if($_GET['filter']=="price_descending")
    {
        $filtervalues = $_GET['filter'];
   
        $q = "SELECT * FROM provider_table WHERE  provider_service='band and dj' order by price desc ";
        $query_run = mysqli_query($con, $q);
        if($query_run->num_rows > 0)
    {
        while($r=$query_run->fetch_assoc())
        {
            echo '<div class="card">';
            echo '<div class="top">';
            if($r["provider_profile_dir"]==null)
            {
                echo '<img src="default img/profile.png" alt="profile img">';
            }
            echo '<img src="'.$r["provider_profile_dir"].'" alt="profile img">';
            echo '</div>';
            echo '<div class="bottom">';
            echo '<h3>'.$r["Brand_name"].'</h3>';
            echo '<p>'. substr($r["description"], 0, 180).'</p>';
            echo '   <a href="provider_profile.php?profile='.$r["Brand_name"].'" class="btn">View More <i class="fa-solid fa-angles-right"></i></a>';
            echo ' </div>';
            echo  '</div>';
        }
    }
    unset($_GET['filter']); 
    }
    else if($_GET['filter']=="price_ascending")
    {

        $filtervalues = $_GET['filter'];
   
        $q = "SELECT * FROM provider_table WHERE  provider_service='band and dj' order by price asc ";
        $query_run = mysqli_query($con, $q);
        if($query_run->num_rows > 0)
    {
        while($r=$query_run->fetch_assoc())
        {
            echo '<div class="card">';
            echo '<div class="top">';
            if($r["provider_profile_dir"]==null)
            {
                echo '<img src="default img/profile.png" alt="profile img">';
            }
            echo '<img src="'.$r["provider_profile_dir"].'" alt="profile img">';
            echo '</div>';
            echo '<div class="bottom">';
            echo '<h3>'.$r["Brand_name"].'</h3>';
            echo '<p>'. substr($r["description"], 0, 180).'</p>';
            echo '   <a href="provider_profile.php?profile='.$r["Brand_name"].'" class="btn">View More <i class="fa-solid fa-angles-right"></i></a>';
            echo ' </div>';
            echo  '</div>';
        }
    }
    unset($_GET['filter']); 
    }
    
    unset($_GET['filter']); 
}


?>
</div>
    
                
          
        
 
<?php include 'footer.php';?>