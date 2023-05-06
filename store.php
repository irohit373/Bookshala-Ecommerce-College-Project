<?php
    include 'function/connection.php';
    include 'function/session.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <?php include 'include/navigation.php'; ?>
    <center><h1>Store</h1></center>
    <div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
    <div>
    <?php
        $query = "SELECT * FROM items";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);

        if ($total != 0){
            echo '<ul id=recs>';
            while($tb_data = mysqli_fetch_assoc($data)){
              
                echo '
                <ul style="float: left;">
                    <li style="float: left; padding: 0px 25px 25px 25px;">
                        <div>
                            <img src="data/book_img/'.$tb_data['image_thumbnail'].'" height="250px">
                            <div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">'.$tb_data['title'].'</span><br> Price: '.$tb_data['price'].' Rs</div>
                        </div>
                    
                    </li>
                </ul>
            ';

            }
        }else{
            echo("<center>No Data Records Found</center>");
        }
    ?>
    
    </div>
    </div>
    

        <!-- Bootstrap -->  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>                    

</body>
</html>