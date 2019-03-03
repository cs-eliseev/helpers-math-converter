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
}