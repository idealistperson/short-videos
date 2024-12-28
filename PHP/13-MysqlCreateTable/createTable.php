<?php
$host = "localhost";
$user = "root";
$password = "secret";
$dbname = "example";
$tablename = "users";

//with MYSQLI
$conn = new mysqli(
    $host, 
    $user,
    $password,
    $dbname
);

$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,   
    username VARCHAR(50) NOT NULL,       
    email VARCHAR(100) UNIQUE,           
    password_hash CHAR(60) NOT NULL,     
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
    is_active TINYINT(1) DEFAULT 1       
)";

if($conn->query($sql)===TRUE){
    echo "Table $tablename successfully";
}else{
    echo "Error:" .$conn->error;
}
$conn->close();

echo "\n";
$tablename = "customers";

//with PDO
try{
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $user,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
    $sql ="CREATE TABLE $tablename (
    id INT AUTO_INCREMENT PRIMARY KEY,   
    username VARCHAR(50) NOT NULL,       
    email VARCHAR(100) UNIQUE,           
    password_hash CHAR(60) NOT NULL,     
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
    is_active TINYINT(1) DEFAULT 1       
)";
    $conn-> exec($sql);
    echo "Table $tablename created..";

}catch(PDOException $e){
    echo "Error:".$e->getMessage();
}
$conn = null;