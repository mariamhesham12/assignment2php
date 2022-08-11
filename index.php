<?php
ob_start();
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["firstname"])){
    $first=filter_var($_POST["firstname"]);
    $last=filter_var($_POST["lastname"]);
    $email=filter_var($_POST["email"]);
    $password=filter_var($_POST["password"]);
    $num=filter_var($_POST["number"]);

    $_SESSION["firstname"]=$first;
    $_SESSION["lastname"]=$last;
    $_SESSION["email"]=$email;
    $_SESSION["password"]=$password;
    $_SESSION["number"]=$num;

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>PHP form</title>
</head>
<body>
    <div class="fullpage">
    <div class="container">
        <center>
            <div class="formbox">
    <form action="index.php" method="POST">

        <div id="data1" class="data">
        <input type="text" name="firstname" placeholder="First name" required>
        </div>
        <div class="data">
        <input type="text" name="lastname" placeholder="Last name" required>
        </div>
        <div class="data">
        <input type="email" name="email" placeholder="Email" required >
         </div>
        <div class="data">
        <input type="password" name="password" placeholder="Password" required>
     </div>
        <div class="data">
        <input type="number" name="number" placeholder="Phone number">
    </div>
        <div class="data">
        <input type="file" name="file">
    </div>
       <input class="btn" type="submit" value="Register">
    </form>
    </div>
    </center>
    </div>
    </div>
 
</body>
</html>
<?php
ob_end_flush();