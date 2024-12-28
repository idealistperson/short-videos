<?php
$gifts = [
    "Write a PHP code for yourself!",
    "Send this video to your best friend!",
    "Do 3 push-ups for yourself!",
    "Read 10 pages of a book!",
    "Follow me for more fun!",
];
$gift = $gifts[array_rand($gifts)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Gift</title>
    <style>
        body{
            font-family : Arial,sans-serif;
            text-align:center;
            padding: 50px;
            background: #fdf0d5;
        }
        .gift{
            background:#f8d7da;
            padding : 20px;
            border-radius:15px;
            font-size:1.5em;
            color: #d32f2f;
        }
    </style>
</head>
<body>
    <h1>🎅Merry Christmas!🎄</h1>
    <p>Today's gift suggestion:</p>
    <div class="gift"><?php echo $gift;?></div>
    <footer><p>🎉Happy New Year!🎉</p></footer>
</body>
</html>