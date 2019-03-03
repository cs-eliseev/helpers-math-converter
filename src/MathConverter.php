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

    /**
     * Convert binary ot hex
     *
     * @param string $bin
     *
     * @return string
     */
    public static function binToHex(string $bin): string
    {
        $hex = '';
        $i = 0;
        do {
            $hex .= sprintf('%02x', ord($bin{$i}));
            $i++;
        } while ($i < strlen($bin));

        return $hex;
    }
}