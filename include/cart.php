<?php 
    require '../function/connection.php';
    require '../function/session.php';

    if (!logged_in()) {
        echo'<script type="text/javascript">
                 window.location = "../login_page.php";
             </script>';
     }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <center><h1>Cart</h1></center>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Photo</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Price</th>
                <th colspan = "2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $user_id = $_SESSION['MEMBER_ID'];
            $query = "SELECT item_id FROM cart WHERE user_id = $user_id";
            $data = mysqli_query($conn, $query);
            // Getting the total's data number
            $total = mysqli_num_rows($data);
           
        if ($total != 0) {
              // Writing the data in clg
            while($tb_data = mysqli_fetch_assoc($data)){
                $item_id = $tb_data['item_id'];
                // mysqli_query($conn, "SELECT * FROM items WHERE item_id = $item_id");
                if($result = mysqli_query($conn, "SELECT * FROM items WHERE item_id = $item_id")){
                        echo "ho";
                }else{
                    echo "yup";
                }

                $tb_data2 = mysqli_fetch_assoc($result);

            echo" 
                <tr>
                    <td>".$tb_data2['item_id']."</td>
                    <td><img src='../data/book_img/".$tb_data2['image_thumbnail']."' height='100' width='100' alt='Not found'/></td>
                    <td>".$tb_data2['title']."</td>

                    <td>".$tb_data2['author']."</td>
                    <td>".$tb_data2['description']."</td>
                    <td>".$tb_data2['price']."</td>
                    <td><a href='table/update.php?id=$tb_data[id]& fname=$tb_data[fname]& lname=$tb_data[lname]& email=$tb_data[email]& contact=$tb_data[contact]& dob=$tb_data[dob]& files=$tb_data[files]' class='btn btn-success' >Buynow</a></td>
                    <td><a href='../function/removefromcart.php?id=$tb_data2[item_id]' class='btn btn-danger'>Remove</a></td>
                </tr>";
                }
            }else{
              // NO data find
              echo("<tr><td colspan='9 '><center>No Data Records Found</center></td></tr>");
            }  
        ?>
        </tbody>
    </table>

</body>
</html>