<?php
$servername = "localhost";
$username = "root";
$password = "secret";
//with PDO
try {
    $pdo = new PDO(
        'mysql:host'.$servername,
        $username,
        $password,
    );
    $pdo->exec("CREATE DATABASE idealist");
    echo "Database created successfuly";
}catch(PDOException $e){
    die("Error:".$e->getMessage());
}
echo "\n";
//with MYSQLI
$conn = new mysqli(
    $servername,
    $username,
    $password,
);
if($conn->connect_error){
    die($conn->connect_error);
}
$mysql_query = "CREATE DATABASE person";
if($conn->query($mysql_query)==TRUE){
    echo "database created.";
}else{
    echo $conn->error;
}