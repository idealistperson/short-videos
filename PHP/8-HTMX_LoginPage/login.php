<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name= $_POST["user"];
    $password = $_POST["pass"];
    if($name=="admin"&& $password == "admin"){
        header("HX-Redirect: admin.html");
        exit;
    }
    else{
        echo "Invalid Credentials<br>";
    }
}