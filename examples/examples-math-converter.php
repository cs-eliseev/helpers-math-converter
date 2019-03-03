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