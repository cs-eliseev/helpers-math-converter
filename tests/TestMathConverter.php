<?php

use cse\helpers\MathConverter;
use PHPUnit\Framework\TestCase;

class TestMathConverter extends TestCase
{
    /**
     * @param string $hex
     * @param string $expected
     *
     * @dataProvider providerHexToBin
     */
    public function testHexToBin(string $hex, string $expected): void
    {
        $this->assertEquals($expected, MathConverter::hexToBin($hex));
    }

    /**
     * @return array
     */
    public function providerHexToBin(): array
    {
        return [
            [
                '40',
                '@',
            ],
            [
                '202020',
                '   ',
            ],
            [
                '48454c4c4f',
                'HELLO',
            ],
        ];
    }


    /**
     * @param string $bin
     * @param string $expected
     *
     * @dataProvider providerBinToHex
     */
    public function testBinToHex(string $bin, string $expected): void
    {
        $this->assertEquals($expected, MathConverter::binToHex($bin));
    }

    /**
     * @return array
     */
    public function providerBinToHex(): array
    {
        return [
            [
                '@',
                '40',
            ],
            [
                '   ',
                '202020',
            ],
            [
                'HELLO',
                '48454c4c4f',
            ],
        ];
    }

    /**
     * @param int $megabyte
     * @param int $expired
     *
     * @dataProvider providerMbToBytes
     */
    public function testMbToBytes(int $megabyte, int $expired): void
    {
        $this->assertEquals($expired, MathConverter::mbToBytes($megabyte));
    }

    /**
     * @return array
     */
    public function providerMbToBytes(): array
    {
        return [
            [
                1,
                1048576,
            ],
            [
                0,
                0,
            ],
        ];
    }

    /**
     * @param int $bytes
     * @param int $decimal
     * @param int $expired
     *
     * @dataProvider providerBytesToMb
     */
    public function testBytesToMb(int $bytes, int $decimal, int $expired): void
    {
        $this->assertEquals($expired, MathConverter::bytesToMb($bytes, $decimal));
    }

    /**
     * @return array
     */
    public function providerBytesToMb(): array
    {
        return [
            [
                1048576,
                MathConverter::DEFAULT_DECIMAL,
                1,
            ],
            [
                0,
                MathConverter::DEFAULT_DECIMAL,
                0,
            ],
            [
                1000000,
                4,
                0.9537,
            ]
        ];
    }

    /**
     * @param int $gigabyites
     * @param int $expired
     *
     * @dataProvider providerGbToBytes
     */
    public function testGbToBytes(?int $gigabyites, int $expired): void
    {
        $this->assertEquals($expired, MathConverter::gbToBytes($gigabyites));
    }

    /**
     * @return array
     */
    public function providerGbToBytes(): array
    {
        return [
            [
                1,
                1073741824,
            ],
            [
                0,
                0,
            ],
            [
                '1',
                1073741824,
            ],
            [
                null,
                0,
            ],
        ];
    }


    /**
     * @param int $bytes
     * @param int $decimal
     * @param int $expired
     *
     * @dataProvider providerBytesToGb
     */
    public function testBytesToGb(int $bytes, int $decimal, int $expired)
    {
        $this->assertEquals($expired, MathConverter::bytesToGb($bytes, $decimal));
    }

    public function providerBytesToGb()
    {
        return [
            [
                1073741824,
                MathConverter::DEFAULT_DECIMAL,
                1,
            ],
            [
                0,
                MathConverter::DEFAULT_DECIMAL,
                0,
            ],
        ];
    }

    /**
     * @param $gigabyte
     * @param $expired
     *
     * @dataProvider providerGbToMb
     */
    public function testGbToMb($gigabyte, $expired): void
    {
        $this->assertEquals($expired, MathConverter::gbToMb($gigabyte));
    }

    /**
     * @return array
     */
    public function providerGbToMb(): array
    {
        return [
            [
                1,
                1024,
            ],
            [
                0,
                0,
            ],
            [
                0.5,
                512,
            ],
        ];
    }

    /**
     * @param int $megabyte
     * @param int $decimal
     * @param $expired
     *
     * @dataProvider providerMbToGb
     */
    public function testMbToGb(int $megabyte, int $decimal, $expired): void
    {
        $this->assertEquals($expired, MathConverter::mbToGb($megabyte, $decimal));
    }

    /**
     * @return array
     */
    public function providerMbToGb(): array
    {
        return [
            [
                1024,
                MathConverter::DEFAULT_DECIMAL,
                1,
            ],
            [
                0,
                MathConverter::DEFAULT_DECIMAL,
                0,
            ],
            [
                1000,
                4,
                0.9766,
            ],
        ];
    }
}