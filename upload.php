<?php
include('config.php');
if(isset($_POST['submit']))
{
    $img = $_FILES['image'];
    print_r( $img);
    $img_name = $_FILES['image']['name'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_des = "uploads/".$img_name;
    $insert = mysqli_query($conn, "INSERT INTO `siv`(`image`) VALUES ('$img_name')");
    if($insert){
        move_uploaded_file($img_loc,'uploads/'.$img_name);
        
        header('location:index.php');
        
    }
   
}
?>

