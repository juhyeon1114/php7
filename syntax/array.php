<?php
$msgArr = [
    'hello world',
    'who are you',
    'bye'
];
$msgArr2 = array('hello','world','bye');
$msgArr3 = [
    0 => 'hello',
    'msg' => 'world',
    'bye',
];
// [ , $msg ] = $msgArr;
// list( , $msg) = $msgArr ;
[ 1 => $msg ] = $msgArr;
var_dump($msg);
echo "<br>";

$msgArr[] = 'why';
$msgArr[4] = 'not';
var_dump($msgArr);
echo "<br>";

unset($msgArr[3]);
var_dump($msgArr);
echo "<br>";

//php7.4
// $arr = ['hello'];
// $arr = [ 
//     ... $arr,
//     'world',
//     'bye'
// ];


