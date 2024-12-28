<?php
$userRole = "member";
switch($userRole){
    case "admin":
        echo "Welcome Admin Panel!";
        break;
    case "editor":
        echo "Welcome Editor!";
        break;
    case "member":
        echo "Welcome App Page";
        break;
    default:
        echo "Unauthorized Access";
        break;
}
?>