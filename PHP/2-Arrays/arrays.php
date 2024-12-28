<?php
//Indexed Arrays
$builds = [
    "tower",
    "home",
    "school",
];
for($i=0;$i<count($builds);$i++){
    echo "$builds[$i]\n";
}
echo "\n\n";

//Associative Arrays
$my_pcs = [
    "desktop"=> "msi",
    "laptop" => "apple",
];
foreach($my_pcs as $pc=>$brand){
    echo "$pc: $brand\n";
}

echo "\n\n";
//Multidimensional Arrays
$shoes = [
    array("Nike",3,"$1000"),
    array("Adidas",5,"$567"),
];
foreach ($shoes as $shoe){
    echo "{$shoe[0]}";
    echo ",{$shoe[1]}";
    echo ",{$shoe[2]}\n";
}
?>