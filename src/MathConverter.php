<?php

declare(strict_types=1);

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

    /**
     * Convert gigabytes to megabytes
     *
     * @param $gigaBytes
     *
     * @return mixed
     */
    public static function gbToMb($gigaBytes)
    {
        return $gigaBytes * 1024;
    }

    /**
     * Convert megabytes to gigabytes
     *
     * @param $megaBytes
     * @param int $decimal
     *
     * @return float
     */
    public static function mbToGb($megaBytes, int $decimal = self::DEFAULT_DECIMAL): float
    {
        return round($megaBytes / 1024, $decimal);
    }

    /**
     * Convert to megabyte
     *
     * @param string $value
     *
     * @return float|int|string
     */
    public static function toMb(string $value)
    {
        $value = trim($value);
        $units = strtolower($value[strlen($value) - 1]);
        $value = floatval($value);
        switch ($units) {
            case 'p':
                $value *= pow(1024, 3);
                break;
            case 't':
                $value *= pow(1024, 2);
                break;
            case 'g':
                $value *= 1024;
                break;
            case 'm':
                break;
            case 'k':
                $value /= 1024;
                break;
            case 'b':
                $value /= pow(1024, 2);
        }

        return $value;
    }

    /**
     * Cut decimal
     *
     * @param $number
     * @param int $decimal
     * @param string $delimiter
     *
     * @return float
     */
    public static function cutDecimal($number, int $decimal = self::DEFAULT_DECIMAL, string $delimiter = '.'): float
    {
        $format = explode($delimiter, (string) $number);

        if (empty($format[1]) || $decimal == strlen($format[1])) return (float) $number;
        $format[1] = substr($format[1], 0, $decimal - strlen($format[1]));

        return (float) implode($delimiter, $format);
    }

    /**
     * Round decimal
     *
     * @param $number
     * @param int $decimal
     *
     * @return float
     */
    public static function roundDecimal($number, int $decimal = self::DEFAULT_DECIMAL): float
    {
        $delimiter = pow(10, $decimal);
        return round(ceil($number * $delimiter) / $delimiter, $decimal);
    }
}