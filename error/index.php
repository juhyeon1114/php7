<?php

/**
 * Log level
 */
error_reporting(E_ALL & ~E_NOTOTICE);

/**
 * Send Error Log
 */
error_log('hello world', 3, __DIR__ . '/logs/log.log');

/**
 * Backtrace -> 역추적 로그
 */
// function foo () {
//     // debug_print_backtrace();
//     var_dump(debug_print_backtrace());
// }
// foo();

/**
 * Ignore Errors
 */
//  function foo2() {
//      aasdfadf;
//  }
//  // @ operator
//  @foo2();

/**
 * Error Handling
 */
//set
set_error_handler(function($errno, $errstr){
    switch($errno){
        case E_USER_ERROR:
            var_dump($errstr);
            break;
        default:
            break;
    }
    var_dump($args);
});
//reset
restore_error_handler();

/**
 * Trigger Custom Error -> 에러 유발시킴
 */
trigger_error('hello, world', E_USER_ERROR);