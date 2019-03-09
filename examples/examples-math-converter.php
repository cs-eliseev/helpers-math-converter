<?php

require_once __DIR__ . '/../autoload.php';

use cse\helpers\MathConverter;

// Example: hex to binary
// 48454c4c4f => HELLO
var_dump(MathConverter::hexToBin('48454c4c4f'));
echo PHP_EOL;

// Example: binary to hex
// HELLO => 48454c4c4f
var_dump(MathConverter::binToHex('HELLO'));
echo PHP_EOL;

// Example: megabytes to bytes
// 1 => 1048576
var_dump(MathConverter::mbToBytes(1));
echo PHP_EOL;

// Example: bytes to megabytes
// 1048576 => 1
var_dump(MathConverter::bytesToMb(1048576));
// 1000000 => 0.9537
var_dump(MathConverter::bytesToMb(1000000, 4));
echo PHP_EOL;

// Example: gigabytes to bytes
// 1 => 1073741824
var_dump(MathConverter::gbToBytes(1));
echo PHP_EOL;

// Example: bytes to megabytes
// 1073741824 => 1
var_dump(MathConverter::bytesToGb(1073741824));
// 1000000000 => 0.9313
var_dump(MathConverter::bytesToGb(1000000000, 4));
echo PHP_EOL;

// Example: gigabytes to megabyte
// 1 => 1024
var_dump(MathConverter::gbToMb(1));
echo PHP_EOL;

// Example: bytes to megabytes
// 1024 => 1
var_dump(MathConverter::mbToGb(1024));
// 1000 => 0.9766
var_dump(MathConverter::mbToGb(1000, 4));
echo PHP_EOL;