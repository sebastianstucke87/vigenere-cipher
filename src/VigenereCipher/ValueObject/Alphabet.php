<?php
declare(strict_types=1);

namespace VigenereCipher\ValueObject;

use InvalidArgumentException;
use VigenereCipher\ScalarValue\StringValue;

final class Alphabet extends StringValue
{
    public static function create(string $string): self
    {
        if (strlen($string) <= 0) {
            throw new InvalidArgumentException('String can not be empty.');
        }

        return new self($string);
    }
}
