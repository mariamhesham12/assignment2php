<?php
session_start();
if(!empty($_SESSION["firstname"])){
    echo $_SESSION["firstname"]. "<br>";
    echo $_SESSION["lastname"]. "<br>";
    echo $_SESSION["email"]. "<br>";
    echo $_SESSION["password"]. "<br>";
    echo $_SESSION["number"]. "<br>";
}
else{
    header("Location:index.php");
}