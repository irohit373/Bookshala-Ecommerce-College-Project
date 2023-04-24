<?php
    require "function/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php
    if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "home.php";
    </script>
    <?php
}
?>
<body>
    <form action="function/login.php" method="POST">
        <input type="email" name="email" id="" placeholder="email">
        <input type="password" name="password" id="" placeholder="password">
        <button type="submit" name="submit">Log In</button>
    </form>
</body>
</html>