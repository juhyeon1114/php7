<?php
define('CON', 'hello');
const CONSTANT = 'hello world';
var_dump(CON);
var_dump(CONSTANT);


// magic constants
echo "<br>";
echo __FILE__; //현재 파일의 경로
echo "<br>";
echo __LINE__; //줄 번호
echo "<br>";
echo __DIR__; //부모 디렉토리 경로