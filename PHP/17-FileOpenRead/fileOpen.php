<?php
$file = "example.txt";

//checking file properties
echo file_exists($file) ? "Yes" : "No";
echo " file exists.\n";


echo is_readable($file) ? "Yes" : "No";
echo " is readable.\n";


echo is_writable($file) ? "Yes" : "No";
echo " is writable.\n";


if(file_exists($file)){
    #1
    // fopen and fgets example
    $handle = fopen($file, "r");

    if($handle){
        while(($line = fgets($handle))!== false){
            echo "$line";
        }
        fclose($handle);
    }    

    
   #2
   // fopen and fread example
   $handle = fopen($file,"r" );
   if($handle){
    $contents = fread($handle,filesize($file));
    echo $contents;
    fclose($handle);
   }
   

   
   #3
   // file_get_contents example
    $contents = file_get_contents($file);
    echo $contents;
    


    #4
    // file() example
    $lines = file($file);
    foreach($lines as $line){
        echo $line;
    }

    #5
    // readfile() example
    readfile($file);


}