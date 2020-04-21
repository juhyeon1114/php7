<?php

/**
 * Create a hash value for password
 */
$hash = password_hash('hello world', PASSWORD_DEFAULT);
$hash2 = crypt('hello world', 'rl');

 /**
  * Verify password hash
  */
var_dump(password_verify('hello world', $hash));
var_dump(password_verify('hello world', $hash2));
var_dump(hash_equals($hash2, crypt('hello world', 'rl')));

/**
 * Get info
 */
password_get_info($hash);

/**
 * Rehash
 */
$hash3 = password_hash('hello world', PASSWORD_DEFAULT, [
    'cost' => 10
]);

$options = [ 'cost' => 11 ];

var_dump(password_needs_rehash($hash, PASSWORD_DEFAULT, $options));