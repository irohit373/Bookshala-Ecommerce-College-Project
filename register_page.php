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
      <!-- Do not touch this -->
      <form action="function/register.php" method="post" class="form">
      <!-- this -->
        <br>
        <h1>Sign Up</h1>
        <br>

        <div><span></span>
        
        <!-- Do not touch this -->            
        <input type="text" name="fname" placeholder="First Name" class="form-control" autofocus="">
        <input type="text" name="lname" placeholder="Last Name" class="form-control">
        <!-- this -->
        </div>

        <br>
        
        <div>
                        <!-- Do not touch this -->                        
                        <input type="email" name="email" class="form-control" placeholder="example@email.com">
                        <!-- this -->
        </div>

        <br>

        <div>
            <span></span>
            <!-- Do not touch this -->
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
            <!-- this -->
        </div>

        <br>
            <!-- Do not touch this -->            
            <button type="submit" name="submit"> Register </button>
            <!-- this -->
    </form>
    </center>
</body>
</html>