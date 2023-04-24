<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
   <center> 
    <form action="function/register.php" method="post" class="form">
        <br>
        <h1>Sign Up</h1>
        <br>

        <div><span></span>
        <input type="text" name="fname" placeholder="First Name" class="form-control" autofocus="">
        <input type="text" name="lname" placeholder="Last Name" class="form-control">
        </div>

        <br>
        
        <div>
            <input type="email" name="email" class="form-control" placeholder="example@email.com">
        </div>

        <br>

        <div>
            <span></span>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
        </div>

        <br>

        <button type="submit" name="submit"> Register </button>
    </form>
    </center>
</body>
</html>