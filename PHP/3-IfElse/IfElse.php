<?php
$uses_technology = true;
$has_natural_powers = false;
$is_hilarious = true;

if($uses_technology && !$has_natural_powers){
    echo "You're Iron Man! \n";
}elseif($has_natural_powers && !$is_hilarous){
    echo "You're Wonder Women\n";
}elseif($hilarious){
    echo "You're Deadpool!\n";
}else{
    echo "You're Mysterio";
}
?>