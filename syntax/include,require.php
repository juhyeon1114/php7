<?php

/**
 * include, require
 */

 include 'array.php'; //여러번 불러올 수 있다.
 include_once 'scope.php'; //중복해서 불러오지 않는다

 require 'control.php'; //파일이 없으면 에러를 발생시킴
 require_once 'variables.php'; //중복해서 불러오지 않는다


 /**
  * return
  */
//include로 포함된 파일에서 아래와 같은 형식으로 값을 넘겨줄 수 있다
return [
    'msg'=>$msg
];
