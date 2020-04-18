<?php

$msg = 'hello world'; //global variables
function foo (){
    global $msg;
    echo $msg;
}
foo();

function foo2(){
    static $count = 0; //local variables
    return ++$count;
}

echo foo2();
echo foo2();
echo foo2();
echo "<br>";


/**
 * closure
 */
function foo3($arg){
    echo $arg;
    return function() use($arg) {
        $arg = 'bye';
        return $arg;
    };
}

$func = foo3('hello world');
echo $func();
echo "<br><br>";