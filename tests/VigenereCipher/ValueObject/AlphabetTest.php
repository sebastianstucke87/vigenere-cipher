<?php
declare(strict_types=1);

namespace VigenereCipherTest\ValueObject;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use VigenereCipher\ScalarValue\StringValue;
use VigenereCipher\ValueObject\Alphabet;

class AlphabetTest extends TestCase
{
    public function testExceptionWhenCreatingWithEmptyString(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Alphabet::create('');
    }

    public function testCreate(): void
    {
        $expected = StringValue::class;
        $actual = Alphabet::create('a');

        $this->assertInstanceOf($expected, $actual);
    }
}
