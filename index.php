<?php
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat</title>
    <link rel="stylesheet" href="style.css" /> 
    
</head>
<body>
    <div class="container">
        <div class="content" id="ct1">
            <div class="form-cont">
            <div class="forms">
                 <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input id="fileInput" type="file" name="image" id="imageFile" accept="image/*" required>
                  <button name='submit' class="subb">Submit</button>
                  <button name='close' class="close">Close</button>
                </form>
            </div>
            </div>
            
        
            <div class="nav">
                <h1>CATS</h1>
                <ul>
                    <li><a href="#ct1">HOME</a></li>
                    <li><a href="#ct2">GALLERY</a></li>
                    <li>ABOUT</li>
                </ul>
            </div>
            <div class="info">
                <div>
                    <h1>Meow, My name is SIV</h1>
                    <p>Hello, I am Samantha Arceo's cherished companion, and I am filled with joy to express my heartfelt affection for her. She is not just an owner but a devoted and loving caregiver, treating me with all the tenderness and care a cherished family member deserves.</p>
                    <button class="sub">Upload Image</button>
                </div>
                <div class="rad">
                    <img src="3.png" alt="">
                </div>
            </div>
        </div>
        <div class="content2" id="ct2">
            <h1>Siv's Gallery</h1>
            <div class="gallery">
            <?php
        $pic = mysqli_query($conn, "SELECT `id`, `image` FROM `siv`");

        if (!$pic) {
            // Query execution failed, handle the error
            echo "Error: " . mysqli_error($conn);
        } else {
            while ($row = mysqli_fetch_assoc($pic)) {
                ?>
                <div class="card">
                <img src="uploads/<?php echo $row['image']; ?>">
                </div>
                <?php
            }
        }
        ?>
                <div class="card">
                    <img src="5.jpg" alt="">
                </div>
                <div class="card">
                    <img src="6.jpg" alt="">
                </div>
                <div class="card">
                    <img src="7.jpg" alt="">
                </div>
                <div class="card">
                    <img src="8.jpg" alt="">
                </div>
                <div class="card">
                    <img src="9.jpg" alt="">
                </div>
                <div class="card">
                    <img src="10.jpg" alt="">
                </div>
                <div class="card">
                    <img src="11.jpg" alt="">
                </div>
                <div class="card">
                    <img src="12.jpg" alt="">
                </div>
                <div class="card">
                    <img src="13.jpg" alt="">
                </div>
                <div class="card">
                    <img src="14.jpg" alt="">
                </div>
                <div class="card">
                    <img src="15.jpg" alt="">
                </div>
                <div class="card">
                    <img src="16.jpg" alt="">
                </div>
                <div class="card">
                    <img src="17.jpg" alt="">
                </div>
                <div class="card">
                    <img src="18.jpg" alt="">
                </div>
                <div class="card">
                    <img src="19.jpg" alt="">
                </div>
                <div class="card">
                    <img src="20.jpg" alt="">
                </div>
            </div>
        </div>
            
    </div>
    <script>
         $(".form-cont").css("display", "none");
        $(document).ready(function(){
            $(".sub").click(function(){
                $(".form-cont").css("display", "block");
                
  });   
  $(".close").click(function(){
                $(".form-cont").css("display", "none");
  });   
  $(".subb").click(function(){
    const fileInput = document.getElementById('fileInput');
      const selectedFile = fileInput.files[0];

      if (!selectedFile) {
        // The file input is null (no file selected)
        alert('Please select a file.');
      } else {
        // File is selected, you can do further processing here if needed.
        alert('Added Successfully: ' + selectedFile.name);
        // For example, you could upload the file using AJAX or perform other operations.
      }
    
                
  });   
        
        });
    </script>
    
</body>
</html>