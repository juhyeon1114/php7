<?php

/**
 * Get hash algorithms
 */
// var_dump(hash_algos());

/**
 * Create a hash
 */
// $hash = hash('sha256', 'hello world');
$hash = crypt('hello world', 'secret');

/**
 * Check a hash
 */
var_dump(hash_equals( $hash, crypt('hello world', 'secret') ));

/**
 * Hash Handler
 */
$h = hash_init('sha256');
hash_update($h, 'hello world');

echo hash_final($h);

/**
 * HMAC (Hash-based Message Authentication Code)
 * 
 * 'secret'이라는 key 값을 같이 포함
 */
var_dump(hash_hmac_algos());

$hash = hash_hmac('sha256', 'hello world', 'secret');
hash_equals($hash, hash_hmac('sha256', 'hello world', 'secret'));
