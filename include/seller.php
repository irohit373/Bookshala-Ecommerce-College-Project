<?php
    include "connection.php";
    include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell it</title>
</head>
<body>
   <center> 
      <!-- Do not touch this -->
      <form action="../function/selling.php" method="POST" enctype="multipart/form-data">
      <!-- this -->
        <br>
        <h1>Fill to Sell</h1>
        <br>

        <div><span></span>
        <!-- Do not touch this             -->
         <input type="text" name="book_title" placeholder="Book Title"  autofocus="">
        <input type="text" name="book_author" placeholder="Author's Name" > 
        <!-- this -->
         </div>

        <br>
        
        <div>
        <!-- Do not touch this -->                        
        <input type="number" name="book_price"  placeholder="Price of The Book">
        <!-- this -->
        </div>

        <div>
            <!-- Do not touch this                         -->
            <input type="text" name="book_description" placeholder="Description of book">
            <!-- this -->
        </div>

        <br>
        
        <div>
        <!-- Do not touch this -->                        
        <input type="text" name="book_tags" placeholder="Tags Related to Books eg. sci-fi non-fiction romance">
        <!-- this -->
        </div>

        <br>

        
        <br>
        <!-- Front Page Upload -->
        <input type="file" name="image_thumbnail" id="image_thumbnail">
        
        <!-- <br> -->
        <!-- multiple image upload -->
        <!-- <input type="file" name="imageFile[]" required multiple > -->
        
        <br><br>


        <!-- Do not touch this -->            
        <input type="submit" value="Upload Image" name="submit">
        <!-- this -->
    </form>
    </center>
</body>
</html>


