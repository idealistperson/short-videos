<?php
$a = 98;
$b = "98 ";

if($a == $b ){
    echo "Equal";
}else{
    echo "Not Equal";
}
echo " , ";
if($a === $b ){
    echo "Same Type and Value";
}else{
    echo "Different Type or Value";
}
/*
A.) Equal , Same Type and Value
B.) Equal , Different Type or Value
C.) Not Equal , Same Type and Value
D.) Not Equal , Different Type or Value
*/
?>