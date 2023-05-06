<?php
    include '../function/connection.php';
    include '../function/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyIt</title>
</head>
<?php
    if (!logged_in()) {
        echo'   <script type="text/javascript">
            window.location = "../login_page.php";
    </script>
    ';
    }
?>
<body>
    
</body>
</html>