<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html template</title>
</head>
<body>
    <h1><?php echo 'hello world' ?></h1>
</body>
</html>

<?php
//php -S localhost:8080 -t /type root directory
echo 'hello world<br>';
print 'hello world!<br>';
// exit;
// die;

(string) 10; //-> "10"
(string) true; //-> "1"
(string) false; //-> ""
(string) 1.234; //->"1.234"

10; //-> Decimal
0777; //-> Octal
0xF; //-> Heximal
0b0101; //-> Binary

(int) 'Hewllo, world'; //->0
(int) '50x'; //->50
(int) true;//->1
(int) false;//->0
(int) null;//->0

(bool) 10;//->true
(bool) [];//->false
(bool) '';//->false
(bool) null;//->false





?>

