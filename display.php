<?php
include("config.php");


?>
<!DOCTYPE html>
<html>
<head>
    <title>Gallery Website</title>
</head>
<style>
    .display{
        display: flex;
        flex-wrap: wrap;
    }
    .display p{
        font-size: 20px;
    }
  
    .card{
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    padding: 15px;
    border-radius: 10px;
    width: 150px;
    height: 150px;
    margin: 20px;
  }
    .card img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<body>
    <h1>Gallery Website</h1>
    <div class="gallery">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="imageFile">
        <button name='submit'>Submit</button>
        <img src="" alt="">
    </form>
    </div>
    
    <div class="display">
        <?php
        $pic = mysqli_query($conn,"SELECT `id`, `image` FROM `cats`");
        while($row = mysqli_fetch_assoc($pic)){
        ?>
        <div class="card">
                    <img src="uploads/<?php echo $row['image']; ?>">
                </div>
        <?php
        };
        ?>
    </div>

</body>
</html>
