<?php
/**
 * php.ini
 * php --ini -> php.ini 파일 생성
 */
//Set
// ini_set( 'session.gc_maxlifetime', 1440 );

//Get
// echo ini_get( 'session.gc_maxlifetime' );

//Reset
// ini_restore( 'session.gc_maxlifetime' );

/**
 * Environment Variables
 */

//Case1
// Set
//  putenv('APP_ENV=' . 'production');
// GEt
// echo getenv('APP_ENV');

//Case2
//set
$_ENV['APP_ENV'] = 'development';
//get
echo $_ENV['APP_ENV'];