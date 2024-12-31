<?php

#with fwrite()
$filename= "example1.txt";
$contentNewFile = "This is a new file.";
$contentNewLine = "\nidealist person.";

//fwrite write mode
$handle = fopen($filename,"w");
if($handle){
    fwrite($handle,$contentNewFile);
    fclose($handle);
}else{
    echo "Unable to open file.";
}

//fwrite append mode
$handle = fopen($filename, "a");
if($handle){
    fwrite($handle,$contentNewLine);
    fclose($handle);
}else{
    echo "Unable to open file.";
}

#------------------------


#with file_put_contents()
$filename= "example2.txt";
$contentNewFile = "This is example 2 file.";
$contentNewLine = "\nidealist person 2.";

//file_put_contents write mode
file_put_contents($filename,$contentNewFile);


//file_put_contents append mode
file_put_contents($filename,$contentNewLine,
FILE_APPEND);