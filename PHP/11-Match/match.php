<?php
$status = 500 ; 

$message = match ($status){
    200 => 'Ok',
    201 => 'Created',
    301 => 'Moved Permanently',
    302 => 'Moved Temporarily',
    401 => 'Unauthorized',
    403 => 'Forbidden',
    404 => 'Not Found',
    500 => 'Server Error',
    502 => 'Bad Gateway',
    default => 'Unknown status',
};
echo $message ;
?>