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
    const DEFAULT_DECIMAL = 2;

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

    /**
     * Convert megabytes to bytes
     *
     * @param $megaBytes
     *
     * @return mixed
     */
    public static function mbToBytes($megaBytes)
    {
        return $megaBytes * pow(1024, 2);
    }

    /**
     * Convert bytes to megabytes
     *
     * @param int $bytes
     * @param int $decimal
     *
     * @return float
     */
    public static function bytesToMb(int $bytes, int $decimal = self::DEFAULT_DECIMAL): float
    {
        return round($bytes / pow(1024, 2), $decimal);
    }

    /**
     * Convert gigabytes to bytes
     *
     * @param $gigaBytes
     *
     * @return mixed
     */
    public static function gbToBytes($gigaBytes)
    {
        return $gigaBytes * pow(1024, 3);
    }

    /**
     * Convert bytes to gigabytes
     *
     * @param int $bytes
     * @param int $decimal
     *
     * @return float
     */
    public static function bytesToGb(int $bytes, int $decimal = self::DEFAULT_DECIMAL): float
    {
        return round($bytes / pow(1024, 3), $decimal);
    }
}