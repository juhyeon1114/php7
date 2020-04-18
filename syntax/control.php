<?php

$msg = [
    'hello',
    'world',
    'bye',
];

$res = [
    'name' => 'PHP',
    'categoryId' => 1,
    // 'msg' => [
    //     'hello',
    //     'world',
    //     'bye'
    // ],
];

for ($i=0; $i < count($msg); $i++){
    echo $msg[$i].PHP_EOL;
}
echo count($msg);
echo "<br>";
foreach ($res as $key => $value) {
    echo $value . PHP_EOL;
}
echo "<br>";
foreach ($res as $value) {
    echo $value . PHP_EOL;
}
echo "<br>";