<?php

declare(strict_types = 1);

namespace cse\helpers;

/**
 * Class MathConverter
 *
 * @package cse\helpers
 */
class MathConverter
{
    /**
     * Convert hex to binary
     *
     * @param string $hex
     *
     * @return string
     */
    public static function hexToBin(string $hex): string
    {
        return pack('H*' , $hex);
    }
}